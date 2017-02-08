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

// importacion de los request que seran utilizados para la validacion de los datos que se envian desde
// los formularios

use GID\Http\Requests\ContratoCrearRequest;

// csrf token
use Session;

// redireccionar a otras vistas
use Redirect;


use Illuminate\Http\Request;

class ContratoController extends Controller {

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
	public function store(ContratoCrearRequest $request)
	{
		//
		\GID\Contrato::create([
			'num_contrato' => $request['No_Contrato'],
			'id_vereda' => $request['Muninicipio_o_Vereda'],
			'id_municipio' => $request['Muninicipio_o_Vereda'],
			'id_departamento' => $request['Departamento'],
			'id_cuerpo' => $request['Objeto'],// ojo esto no va aqui
			'valor_presupuestado' => $request['Valor_Presupuestado'],
			'valor_ejecutado' => $request['Valor_Ejecutado'],
			'id_estado' => $request['Estado_del_Contrato'],
			'id_caja' => $request['Caja'],
			'id_carpeta' => $request['Carpeta'],
			'fecha_inicio' => $request['Fecha_de_Inicio'],
			'rup' => $request['RUP'],
			'comentario' => $request['Comentario'],
			'id_tipo_contrato' => $request['Tipo_de_Contrato'],
			'id_contratante' => $request['Tipo_de_Contratante'],
			'id_tipo_contratante' => $request['Contratante'],
			'id_contratista' => $request['Contratista'],
		]);
		return "contrato almacenado";
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
