<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

use Illuminate\Http\Request;


// csrf token
use Session;

// importacion de los request que seran utilizados para la validacion de los datos que se envian desde
// los formularios

use GID\Estante;
use GID\Folio;
use GID\ActaFinal;
use GID\Contrato;
use GID\Http\Requests\ActaFinalCreateRequest;

class ActaFinalController extends Controller {

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
		return view('contrato.actafinal',compact('estantes','id_contrato'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ActaFinalCreateRequest $request)
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
				\GID\ActaFinal::create([
					'detalle_acta_final'				=>	$request['Detalle'],
					'valor_acta_final'					=>	$request['Valor'],
					'fecha_firma_acta_final'			=>	$request['Fecha_de_Firma'],
					'pdf_acta_final'					=>		$nombre,
					'observacion_acta_final'			=>	$request['Observacion'],
					'id_contrato'						=>	$request['id'],				
				]);
				
				//se debe guardar el acta inicial basada en folios, que pertenecen a una carpeta
				$ultima_acta = \GID\ActaFinal::select('id')->orderby('created_at','DESC')->take(1)->get();
				$id_acta = $ultima_acta[0]->id;
				

				for ($i=$request['Folio_Inicial']; $i <= $request['Folio_Final'] ; $i++) {

					\GID\Folio::create([
					'id_carpeta' => $request['Carpeta'],
					'id_acta_final' => $id_acta,
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
		
		return redirect()->back()->with('message','Acta Final  Agregada Correctamente');
			

				
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
		->join('actafinals', 'contratos.id', '=', 'actafinals.id_contrato')
			->groupBy('contratos.id')
			->where('actafinals.id', '=', $id)
			->get();
		
		$acta_final = ActaFinal::select('estantes.num_estante as estante','cajas.num_caja as caja','carpetas.num_carpeta as carpeta','detalle_acta_final as detalle','valor_acta_final as valor','fecha_firma_acta_final as fecha_final','observacion_acta_final as observacion','pdf_acta_final as pdf','actafinals.id_contrato as id')
			->join('folios', 'actafinals.id', '=', 'folios.id_acta_final')
			->join('carpetas', 'folios.id_carpeta', '=', 'carpetas.id')
			->join('cajas', 'carpetas.id_caja', '=', 'cajas.id')
			->join('estantes', 'cajas.id_estante', '=', 'estantes.id')
			->where('actafinals.id', '=',$id)
			->groupby('actafinals.id')
			->take(1)
			->get();			
		
		return view('contrato.actafinalinformacion',compact('acta_final','contrato'));
	}
	public function getActasFinales($id)
	{
		$contrato = Contrato::select('id')
			->where('id', '=', $id)
			->get();
		
		$acta_final = ActaFinal::select('detalle_acta_final as detalle','valor_acta_final as valor','observacion_acta_final as observacion','id')
			->where('id_contrato', '=',$id)
			->paginate(2);
		
		return view('contrato.actafinalpaginacion',compact('acta_final','contrato'));
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
