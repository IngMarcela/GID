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

//Actas de contrato
Route::resource('actainicial','ActaInicialController');
Route::resource('actaparcial','ActaParcialController');
Route::resource('actafinal','ActaFinalController');
Route::resource('actaliquidacion','ActaLiquidacionController');

//paginacion acta inicial
Route::get('inicial_paginacion/{id}',[
    'uses' => 'ActaInicialController@getActasIniciales',
    'as'   => 'inicial_paginacion'
]);
//paginacion acta parcial
Route::get('parcial_paginacion/{id}',[
    'uses' => 'ActaParcialController@getActasParciales',
    'as'   => 'parcial_paginacion'
]);
//paginacion acta final
Route::get('final_paginacion/{id}',[
    'uses' => 'ActaFinalController@getActasFinales',
    'as'   => 'final_paginacion'
]);
//paginacion acta liquidacion
Route::get('liquidacion_paginacion/{id}',[
    'uses' => 'ActaLiquidacionController@getActasLiquidaciones',
    'as'   => 'liquidacion_paginacion'
]);
//paginacion certificacion
Route::get('certificacion_paginacion/{id}',[
    'uses' => 'CertificacionController@getCertificaciones',
    'as'   => 'certificacion_paginacion'
]);

//paginacion factura
Route::get('factura_paginacion/{id}',[
    'uses' => 'FacturaController@getFacturas',
    'as'   => 'factura_paginacion'
]);

//paginacion archivo
Route::get('archivo_paginacion/{id}',[
    'uses' => 'ArchivoController@getArchivos',
    'as'   => 'archivo_paginacion'
]);



//archivos de contrato
Route::resource('archivo','ArchivoController');
//buscar contrato
Route::get('buscar','contratoController@buscar');
Route::get('buscar_sin_rup','ContratoController@buscarSinRup');

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


Route::resource('estante','EstanteController');
Route::resource('caja','CajaController');
Route::resource('carpeta','CarpetaController');

Route::resource('municipio','MunicipioController');
Route::resource('vereda','VeredaController');

Route::resource('contrato','ContratoController');

// recibe un id de un estante con el cual se hallara las cajas asociados
Route::get('cajas/{id}','ContratoController@getCajas');
// recibe un id de una caja con el cual se hallara las carpetas asociadas
Route::get('carpetas/{id}','ContratoController@getCarpetas');

// recibe un id de un departamento con el cual se hallara los municipios asociados
Route::get('municipios/{id}','ContratoController@getMunicipios');
// recibe un id de un municipio con el cual se hallara las veredas asociadas
Route::get('veredas/{id}','ContratoController@getVeredas');

// recibe un id de un departamento con el cual se hallara el rup asociado
Route::get('rup/{id}','ContratoController@getRup');