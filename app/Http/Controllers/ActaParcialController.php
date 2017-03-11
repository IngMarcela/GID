<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

use Illuminate\Http\Request;
// importacion de los request que seran utilizados para la validacion de los datos que se envian desde
// los formularios

use GID\Estante;
use GID\Folio;
use GID\ActaParcial;
use GID\Contrato;

// csrf token
use Session;

use GID\Http\Requests\ActaParcialCreateRequest;

class ActaParcialController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
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
		return view('contrato.actaparcial',compact('estantes','id_contrato'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ActaParcialCreateRequest $request)
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
				\GID\ActaParcial::create([
										
						'detalle_acta_parcial'				=>	$request['Detalle'],
						'pdf_acta_parcial'					=>		$nombre,
						'observacion_acta_parcial'			=> $request['Observacion'],
						'id_contrato'						=>	$request['id'],
					
		]);

				//se debe guardar el acta inicial basada en folios, que pertenecen a una carpeta
				$ultima_acta = \GID\ActaParcial::select('id')->orderby('created_at','DESC')->take(1)->get();
				$id_acta = $ultima_acta[0]->id;


				for ($i=$request['Folio_Inicial']; $i <= $request['Folio_Final'] ; $i++) {

					\GID\Folio::create([
					'id_carpeta' => $request['Carpeta'],
					'id_acta_parcial' => $id_acta,
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
			
					
		
		return redirect()->back()->with('message','Acta Parcial  Agregada Correctamente');
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
		->join('actaparcials', 'contratos.id', '=', 'actaparcials.id_contrato')
			->groupBy('contratos.id')
			->where('actaparcials.id', '=', $id)
			->get();
		
		$acta_parcial = ActaParcial::select('estantes.num_estante as estante','cajas.num_caja as caja','carpetas.num_carpeta as carpeta','detalle_acta_parcial as detalle','pdf_acta_parcial as pdf','observacion_acta_parcial as observacion','actaparcials.id_contrato as id')
			->join('folios', 'actaparcials.id', '=', 'folios.id_acta_parcial')
			->join('carpetas', 'folios.id_carpeta', '=', 'carpetas.id')
			->join('cajas', 'carpetas.id_caja', '=', 'cajas.id')
			->join('estantes', 'cajas.id_estante', '=', 'estantes.id')
			->where('actaparcials.id', '=',$id)
			->groupby('actaparcials.id')
			->take(1)
			->get();		
		
		return view('contrato.actaparcialinformacion',compact('acta_parcial','contrato'));
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
	
	
	public function getActasParciales($id)
	{
		$contrato = Contrato::select('id')
			->where('id', '=', $id)
			->get();
		
		$acta_parcial = ActaParcial::select('detalle_acta_parcial as detalle','observacion_acta_parcial as observacion','id')
			->where('id_contrato', '=',$id)
			->paginate(5);
		
		return view('contrato.actaparcialpaginacion',compact('acta_parcial','contrato'));
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
