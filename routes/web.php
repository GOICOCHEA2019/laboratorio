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

<<<<<<< HEAD
Route::resource('categoria', 'CategoriaController');

=======
Route::resource('productos', 'ProductosController');
Route::resource('unidades', 'UnidadesController');
Route::resource('categorias', 'CategoriasController');
Route::resource('proveedores', 'ProveedoresController');
>>>>>>> 87d6c24605a23601de91536452a7988f621797b6