<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

use Illuminate\Http\Request;

// importacion de los request que seran utilizados para la validacion de los datos que se envian desde
// los formularios
use GID\Estante;
use GID\Folio;
use GID\Certificacion;
use GID\Contrato;

// csrf token
use Session;

use GID\Http\Requests\CertificacionCreateRequest;
class CertificacionController extends Controller {

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
		return view('contrato.certificacion',compact('estantes','id_contrato'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CertificacionCreateRequest $request)
	{//a partir de este sector comienza la transaccion.
		//si falla algo ccon relacion a la base de deato, se va a regrear al estado inicial
		\DB::beginTransaction();

        try {
        	
			if ($request->hasFile('PDF')) {
				$archivo = $request->file('PDF');
				$nombre = $archivo->getClientOriginalName();
				
				
				//   le decimos al modelo 
				//                cree un registro en la base de datos
				\GID\Certificacion::create([
					'entidad_certifica'					=>	$request['Entidad_que_Certifica'],
					'fecha_expedicion_certificacion'	=>	$request['Fecha_de_Expedicion'],				
					'pdf_certificacion'					=>		$nombre,
					'entregado_por'						=>	$request['Entregado_por'],
					'id_contrato'						=>	 $request['id'],
					
				]);

				//se debe guardar el acta inicial basada en folios, que pertenecen a una carpeta
				$ultima_certificacion = \GID\Certificacion::select('id')->orderby('created_at','DESC')->take(1)->get();
				$id_certificacion = $ultima_certificacion[0]->id;


				for ($i=$request['Folio_Inicial']; $i <= $request['Folio_Final'] ; $i++) {

					\GID\Folio::create([
					'id_carpeta' => $request['Carpeta'],
					'id_certificacion' => $id_certificacion,
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

		
		return redirect()->back()->with('message','Certificación  Agregada Correctamente');
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
		->join('certificacions', 'contratos.id', '=', 'certificacions.id_contrato')
			->groupBy('contratos.id')
			->where('certificacions.id', '=', $id)
			->get();
		
		$certificacion = Certificacion::select('estantes.num_estante as estante','cajas.num_caja as caja','carpetas.num_carpeta as carpeta','entidad_certifica as entidad','fecha_expedicion_certificacion as fecha','pdf_certificacion as pdf','entregado_por as entregado','certificacions.id_contrato as id')
			->join('folios', 'certificacions.id', '=', 'folios.id_certificacion')
			->join('carpetas', 'folios.id_carpeta', '=', 'carpetas.id')
			->join('cajas', 'carpetas.id_caja', '=', 'cajas.id')
			->join('estantes', 'cajas.id_estante', '=', 'estantes.id')
			->where('certificacions.id', '=',$id)
			->groupby('certificacions.id')
			->take(1)
			->get();			
		
		return view('contrato.certificacioninformacion',compact('certificacion','contrato'));
	}
	public function getCertificaciones($id)
	{
		$contrato = Contrato::select('id')
			->where('id', '=', $id)
			->get();
		
		$certificaciones = Certificacion::select('entidad_certifica as entidad','fecha_expedicion_certificacion as fecha','id')
			->where('id_contrato', '=',$id)
			->paginate(5);
		
		return view('contrato.certificacionpaginacion',compact('certificaciones','contrato'));
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
