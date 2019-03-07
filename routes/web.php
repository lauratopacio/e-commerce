<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('nombre/{nombre}', function ($nombre) {
    return 'mi nombre es:'.$nombre;
});
Route::get('edad/{edad?}', function ($edad=2) {
    return 'mi edad es:'.$edad;
});
//ruta  del controlador register de la funcion index
Route::get('controlador', 'RegisterController@index');

//ruta del controlador  pero mandandole un dato
Route::get('name/{nombre}', 'RegisterController@nombre');

//ruta con controlador
Route::resource('Principal','PrincipalController');