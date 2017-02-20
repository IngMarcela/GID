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
Route::get('contratos','contratoController@contratos');
//Actas de contrato
Route::get('actainicial','contratoController@actainicial');
Route::get('actaparcial','contratoController@actaparcial');
Route::get('actafinal','contratoController@actafinal');
//archivos de contrato
Route::get('archivos','contratoController@archivos');
//buscar contrato
Route::get('buscar','contratoController@buscar');
//certificacion de contrato
Route::get('certificacion','contratoController@certificacion');


Route::resource('estante','EstanteController');
Route::resource('caja','CajaController');
Route::resource('carpeta','CarpetaController');

Route::resource('municipio','MunicipioController');
Route::resource('vereda','VeredaController');

Route::resource('contrato','ContratoController');

// recibe un id de un departamento con el cual se hallara los municipios asociados
Route::get('municipios/{id}','ContratoController@getMunicipios');
// recibe un id de una municipio con el cual se hallara las veredas asociadas
Route::get('veredas/{id}','ContratoController@getVeredas');

// recibe un id de un departamento con el cual se hallara el rup asociado
Route::get('rup/{id}','ContratoController@getRup');