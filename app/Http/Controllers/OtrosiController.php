<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OtrosiController extends Controller {

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
	public function createo()
	{
		return view('otrosi.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		return "Hola mundo";
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
	public function otrosi()
	{
		return view('otrosi.otrosis');
	}
	// llamado de las vistas del acta inicial
	//la funcion de la presente acta es agregar los detalles conjunto con el pdf
	public function actainicial()	
	{
		return view('otrosi.actainicial');
	}
	// llamado de las vistas del acta parcial
	//la funcion de la presente acta es agregar los detalles conjunto con el pdf
	public function actaparcial()
	{
		return view('otrosi.actaParcial');
	}
	// llamado de las vistas del acta final
	//la funcion de la presente acta es agregar los detalles conjunto con el pdf
	public function actafinal()
	{
		return view('otrosi.actafinal');
	}
	// llamado de las vistas del archivo
	//la funcion de la presente archivo es agregar los detalles conjunto con el pdf
	public function archivos()
	{
		return view('otrosi.archivos');
	}
	// llamado de las vistas de la certificacion
	//la funcion de la presente archivo es agregar los detalles conjunto con el pdf
	public function certificacion()
	{
		return view('otrosi.certificacion');
	}
	// llamado de las vistas de la busqueda del otrosi
	//la funcion de la presente archivo es agregar los detalles conjunto con el pdf
	public function buscar()
	{
		return view('otrosi.buscar');
	}

}
