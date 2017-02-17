<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','FrontController@index');
//Rutas de la pagina principal de contratos
Route::resource('contratos','contratoController');
//Actas de contrato
Route::resource('actainicial','ActaInicialController');
Route::resource('actaparcial','ActaParcialController');
Route::resource('actafinal','ActaFinalController');
Route::resource('actaliquidacion','ActaLiquidacionController');

//archivos de contrato
Route::resource('archivos','ArchivosController');
//buscar contrato
Route::get('buscar','contratoController@buscar');
//certificacion de contrato
Route::resource('certificacion','CertificacionController');
//certificacion de factura
Route::resource('factura','FacturaController');
//////////7
//Rutas de la pagina principal de otrosi
Route::get('otrosis','otrosiController@otrosi');
//Actas de otrosi
Route::get('actainicial_otrosi','otrosiController@actainicial');
Route::get('actaparcial_otrosi','otrosiController@actaparcial');
Route::get('actafinal_otrosi','otrosiController@actafinal');
//archivos de otrosi
Route::get('archivos_otrosi','otrosiController@archivos');
//buscar otrosi
Route::get('buscar_otrosi','otrosiController@buscar');
//certificacion de otrosi
Route::get('certificacion_otrosi','otrosiController@certificacion');
Route::get('otrosi','otrosiController@createo');
///////////////
//Rutas de la pagina principal de documentos
Route::get('documentos','DocumentosController@documentos');
//Rutas de la pagina principal de Hoja de vida
Route::get('hojas_vida','HojaDeVidaController@hoja_vida');
//creacion del contrato
Route::get('hoja_vidad','HojaDeVidaController@created');


Route::get('createc','ContratoController@create');
// recibe un id de un departamento con el cual se hallara los municipios asociados
Route::get('municipio/{id}','ContratoController@getMunicipios');