<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/atencionCliente', 'homeController@atencionCliente');
Route::get('/promociones', 'homeController@promociones');
Route::get('/servicios', 'homeController@servicios');
Route::get('/enlaces', 'homeController@enlaces');
Route::get('/login', 'homeController@login');
Route::get('/registro', 'homeController@registro');
Route::get('/compra', 'homeController@compra');
Route::get('/pasaje', 'homeController@pasaje');
