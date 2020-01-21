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
/*  $user=Auth::user();
  if($user->esAdmin()){
    echo "Eres usuario administrador";
  }
  else{
    echo "Eres subdito";
  } */

  return view('welcome');
});
Route::resource('/productos', 'productosController');

/*
Route::get('/inicio', 'ProductosController@index');
Route::get('/crear', 'ProductosController@create');
Route::get('/actualizar', 'ProductosController@update');
Route::get('/insertar', 'ProductosController@store');
Route::get('/borrar', 'ProductosController@destroy');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdministradorController@index');
