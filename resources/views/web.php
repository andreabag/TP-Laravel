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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/articulos', 'ArticulosController@index');
Route::get('/articulos/{id}', 'ArticulosController@show');
Route::get('/articulos/camperas', 'ArticulosController@campera');
Route::get('/articulos/camperas', 'ArticulosController@buzo');
Route::get('/articulos/camperas', 'ArticulosController@pantalon');

Route::get('/administrador', function()
{
  return view ('agregarArticulo');
});
Route::post('/administrador', 'ArticulosController@agregar');


Route::post('/borrarArticulo', 'ArticulosController@borrar');

Route::get('/modificarArticulo/{id}', 'ArticulosController@modificar');