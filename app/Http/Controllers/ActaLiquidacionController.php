<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

use Illuminate\Http\Request;
// importacion de los request que seran utilizados para la validacion de los datos que se envian desde
// los formularios
use GID\Estante;
use GID\Caja;
use GID\Carpeta;
use GID\Folio;

use GID\Http\Requests\ActaLiquidacionCreateRequest;
class ActaLiquidacionController extends Controller {

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
		$cajas = Caja::lists('num_caja','id');
		$carpetas = Carpeta::lists('num_carpeta','id');
		$estantes = Estante::lists('num_estante','id');
		
		// llamado de las vistas del acta inicial
		//la funcion de la presente acta es agregar los detalles conjunto con el pdf
		// renderiza la vista y le envia los registros 
		return view('contrato.actaliquidacion',compact('estantes','cajas','carpetas'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ActaLiquidacionCreateRequest $request)
	{
		return 'lo hiciste muy bn';
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

}
