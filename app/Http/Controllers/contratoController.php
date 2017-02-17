<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

// importacion de los modelos que seran utilizados para manipular los datos dentro de la base de datos
use GID\Departamento;
use GID\Municipio;
use GID\Estado;
use GID\Contratista;
use GID\TipoContratante;
use GID\TipoContrato;
use GID\User;
use GID\Contrato;

use Illuminate\Http\Request;

class contratoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('contrato.contratos');
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
		$departamentos = Departamento::lists('nom_departamento','id');
		$estados = Estado::lists('estado','id');
		$contratistas = Contratista::lists('contratista','id');
		$tipo_contratantes = TipoContratante::lists('tipo_contratante','id');
		$tipo_contratos = TipoContrato::lists('tipo_contrato','id');
		// renderiza la vista y le envia los registros 
		return view('contrato.create',compact('departamentos','estados','contratistas','tipo_contratantes','tipo_contratos'));
	}


	public function getMunicipios(Request $request, $id){
		// valida si la peticion se realizo mediante ajax	
		if($request->ajax()){
			// invoca el metodo municipios() perteneciente al modelo Municipio
			$municipios = Municipio::municipios($id);
			// envia la respuesta mediante un tipo json
			return response()->json($municipios);
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	// llamado de las vistas de la busqueda
	public function buscar(Request $request)
	{
		//creacion de la variable 
		//hace referencia al namespace de la aplicación 
		//dentro de la aplicacion referenciamos el modelo con el User 
		//all traer todos los elementros que contiene los elementos del modelo User 
		//paginate los divide en seccioness
		$Contratos = Contrato::paginate(5);
		//Retorna una vista donde se entuentra el usuario con su respectivo vista
		//enviar información 
		//compact, manera adecuada que en la vista contenga la informacion
		//basado en la variable user 
		//la informacion de encuentra en la vista
		////////////////////////////////////////////////////////
		//preguntamos si el Request
		if($request->ajax()){
			return response()->json(view('contrato.buscar',compact('Contratos'))->render());
			
				
		}
        return view('contrato.buscar',compact('Contratos'));
	}
}
