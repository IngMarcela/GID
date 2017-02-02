<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

// importacion de los modelos que seran utilizados para manipular los datos dentro de la base de datos
use GID\Departamento;
use GID\Municipio;
use GID\Estado;

use Illuminate\Http\Request;

class contratoController extends Controller {

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
		$departamentos = Departamento::lists('nom_departamento','id');
		$estados = Estado::lists('estado','id');
		// renderiza la vista y le envia los registros 
		return view('contrato.create',compact('departamentos','municipios','veredas','estados'));
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
	// llamado de las vistas del contrato 
	//encontramos las opciones de agregar contrato y buscar contrato
	public function contratos()
	{
		return view('contrato.contratos');
	}
	// llamado de las vistas del acta inicial
	//la funcion de la presente acta es agregar los detalles conjunto con el pdf
	public function actainicial()	
	{
		return view('contrato.actainicial');
	}
	// llamado de las vistas del acta parcial
	//la funcion de la presente acta es agregar los detalles conjunto con el pdf
	public function actaparcial()
	{
		return view('contrato.actaParcial');
	}
	// llamado de las vistas del acta final
	//la funcion de la presente acta es agregar los detalles conjunto con el pdf
	public function actafinal()
	{
		return view('contrato.actafinal');
	}
	// llamado de las vistas del archivo
	//la funcion de la presente archivo es agregar los detalles conjunto con el pdf
	public function archivos()
	{
		return view('contrato.archivos');
	}
	// llamado de las vistas de la certificacion
	//la funcion de la presente archivo es agregar los detalles conjunto con el pdf
	public function certificacion()
	{
		return view('contrato.certificacion');
	}

}
