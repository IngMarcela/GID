<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

use Illuminate\Http\Request;
// importacion de los request que seran utilizados para la validacion de los datos que se envian desde
// los formularios

use GID\Estante; 
use GID\Folio;
use GID\Archivo;
use GID\Contrato;

// csrf token
use Session;
use GID\Http\Requests\ArchivoCreateRequest;
class ArchivoController extends Controller {

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
		return view('contrato.archivo',compact('estantes','id_contrato'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArchivoCreateRequest $request)
	{//a partir de este sector comienza la transaccion.
		//si falla algo ccon relacion a la base de deato, se va a regrear al estado inicial
		
		\DB::beginTransaction();

        try {
        	
			if ($request->hasFile('PDF')) {
				$archivo = $request->file('PDF');
				$nombre = $archivo->getClientOriginalName();
				
				$request->file('PDF')->move('documentos',$nombre);
				//$archivo->move('/documentos');
			} else {
				
				dd($request->all());
			
			}
				
				//   le decimos al modelo 
				//                cree un registro en la base de datos
				\GID\Archivo::create([
					'detalle_archivo'				=>	$request['Detalle'],
					'pdf_archivo'					=>		
					$nombre,
					'observacion_archivo'			=>
					$request['Observacion'],
					'id_contrato'					=>	
					$request['id'],
					
				]);
			
			
			$ultima_archivo = \GID\Archivo::select('id')->orderby('created_at','DESC')->take(1)->get();
			$id_archivo = $ultima_archivo[0]->id;
				
				
			for ($i=$request['Folio_Inicial']; $i <= $request['Folio_Final'] ; $i++) {
						 
				\GID\Folio::create([
				'id_carpeta' => $request['Carpeta'],
				'id_archivo' => $id_archivo,
				'num_folio' => $i,
					
				]);
			}
		
		
			// Hacemos los cambios permanentes ya que no han habido errores
        	\DB::commit();
			
			
		
			
		}
        // Ha ocurrido un error, devolvemos la BD a su estado previo y hacemos lo que queramos con esa excepción
        catch (\Exception $e)
        {
                \DB::rollback();
				
		 		return $resultado='ERROR (' . $e->getCode() . '): ' . $e->getMessage();
        }
		return redirect()->back()->with('message','Acta Inicial  Agregada Correctamente');
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
		->join('archivos', 'contratos.id', '=', 'archivos.id_contrato')
			->groupBy('contratos.id')
			->where('archivos.id', '=', $id)
			->get();
		
		$archivo = Archivo::select('estantes.num_estante as estante','cajas.num_caja as caja','carpetas.num_carpeta as carpeta','detalle_archivo as detalle','pdf_archivo as pdf','observacion_archivo as observacion','archivos.id_contrato as id')
			->join('folios', 'archivos.id', '=', 'folios.id_archivo')
			->join('carpetas', 'folios.id_carpeta', '=', 'carpetas.id')
			->join('cajas', 'carpetas.id_caja', '=', 'cajas.id')
			->join('estantes', 'cajas.id_estante', '=', 'estantes.id')
			->where('archivos.id', '=',$id)
			->groupby('archivos.id')
			->take(1)
			->get();			
		
		return view('contrato.archivoinformacion',compact('archivo','contrato'));
	}

	
	public function getArchivos($id)
	{
		$contrato = Contrato::select('id')
			->where('id', '=', $id)
			->get();
		
		$archivos = Archivo::select('detalle_archivo as detalle','observacion_archivo as observacion','id')
			->where('id_contrato', '=',$id)
			->paginate(5);
		
		return view('contrato.archivopaginacion',compact('archivos','contrato'));
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
