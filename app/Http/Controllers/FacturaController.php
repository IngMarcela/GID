<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

use Illuminate\Http\Request;

// importacion de los request que seran utilizados para la validacion de los datos que se envian desde
// los formularios
use GID\Estante;
use GID\Folio;
use GID\Factura;
use GID\contrato;

// csrf token
use Session;
use GID\Http\Requests\FacturaCreateRequest;
class FacturaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	// carga los registros almacenados en la base de datos para las correspondientes tablas a las
		// que hacen referencia los modelos
		$estantes = Estante::lists('num_estante','id');
		
		$ultimo_contrato = \GID\Contrato::select('id')->orderby('created_at','DESC')->take(1)->get();
			$id_contrato = $ultimo_contrato[0]->id;
		// llamado de las vistas del acta inicial
		//la funcion de la presente acta es agregar los detalles conjunto con el pdf
		// renderiza la vista y le envia los registros 
		return view('contrato.factura',compact('estantes','id_contrato'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(FacturaCreateRequest $request)
	{
		//a partir de este sector comienza la transaccion.
		//si falla algo ccon relacion a la base de deato, se va a regrear al estado inicial
		\DB::beginTransaction();

        try {
        	
			if ($request->hasFile('PDF')) {
				$archivo = $request->file('PDF');
				$nombre = $archivo->getClientOriginalName();
				
				
				//   le decimos al modelo 
				//                cree un registro en la base de datos
				\GID\Factura::create([
						'num_factura'					=>	$request['No_Factura'],
						'empresa_factura'				=>	$request['Empresa'],
						'detalle_factura'				=>	$request['Detalle'],
						'valor_factura'					=>	$request['Valor_Total'],
						'pdf_factura'					=>		$nombre,		
						'id_contrato'					=>	$request['id'],
			]);

				//se debe guardar el acta inicial basada en folios, que pertenecen a una carpeta
				$ultima_factura = \GID\Factura::select('id')->orderby('created_at','DESC')->take(1)->get();
				$id_factura = $ultima_factura[0]->id;


				for ($i=$request['Folio_Inicial']; $i <= $request['Folio_Final'] ; $i++) {

					\GID\Folio::create([
					'id_carpeta' => $request['Carpeta'],
					'id_factura' => $id_factura,
					'num_folio' => $i,

					]);
				}


				// Hacemos los cambios permanentes ya que no han habido errores
				\DB::commit();




				$request->file('PDF')->move('documentos',$nombre);
				//$archivo->move('/documentos');
			} else {
				
				dd($request->all());
			
			}
			
				
		
		
			
		}
        // Ha ocurrido un error, devolvemos la BD a su estado previo y hacemos lo que queramos con esa excepción
        catch (\Exception $e)
        {
                \DB::rollback();
				
		 		return $resultado='ERROR (' . $e->getCode() . '): ' . $e->getMessage();
        }

		
		return redirect()->back()->with('message','Factura  Agregada Correctamente');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{		
		$contrato = Contrato::select('contratos.id as id')
		->join('facturas', 'contratos.id', '=', 'facturas.id_contrato')
			->groupBy('contratos.id')
			->where('facturas.id', '=', $id)
			->get();
		
		$factura = Factura::select('num_factura as no','estantes.num_estante as estante','cajas.num_caja as caja','carpetas.num_carpeta as carpeta','empresa_factura as empresa','detalle_factura as detalle','pdf_factura as pdf','valor_factura as valor','facturas.id_contrato as id')
			->join('folios', 'facturas.id', '=', 'folios.id_factura')
			->join('carpetas', 'folios.id_carpeta', '=', 'carpetas.id')
			->join('cajas', 'carpetas.id_caja', '=', 'cajas.id')
			->join('estantes', 'cajas.id_estante', '=', 'estantes.id')
			->where('facturas.id', '=',$id)
			->groupby('facturas.id')
			->take(1)
			->get();			
		
		return view('contrato.facturainformacion',compact('factura','contrato'));
	}
	
	public function getFacturas($id)
	{
		$contrato = Contrato::select('id')
			->where('id', '=', $id)
			->get();
		
		$facturas = Factura::select('empresa_factura as empresa','detalle_factura as detalle','id')
			->where('id_contrato', '=',$id)
			->paginate(5);
		
		return view('contrato.facturapaginacion',compact('facturas','contrato'));
	}
	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
