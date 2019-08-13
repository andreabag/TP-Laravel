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
Route::get('/admin/agregarArticulo', function(){
  return view ('agregarArticulo');
})->middleware("admin");
Route::post('/administrador', 'ArticulosController@agregar');
Route::get('/modificarArticulo/{id}', 'ArticulosController@modificar')->middleware("admin");
Route::post('/borrarArticulo', 'ArticulosController@borrar')->middleware("admin");
Route::post('/actualizarArticulo', 'ArticulosController@actualizarArticulo')->middleware("admin");;
Route::get('/search','ArticulosController@buscar');
Route::get('/contacto', function(){
  return view('contacto');
});
Route::get('/admin/articulos', 'ArticulosController@adminIndex')->middleware("admin");
Route::get('/carrito','CarritoController@index');
Route::get('/detalleArticulo/{id}', 'ArticulosController@detalle');


Route::get('/eliminarDelCarrito/{id}', 'CarritoController@eliminar');
Route::get('/restarUnaUnidad/{id}', 'CarritoController@restar');
Route::get('/sumarUnaUnidad/{id}', 'CarritoController@sumar');

