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

Route::get('/usuarios/{id}/archivos','ArchivosController@mostrar');

Route::get('/archivos','ArchivosController@index');

Route::post('/archivos/{id}', 'ArchivosController@store');

Route::get('/archivos/{id}/descargar', 'ArchivosController@descargar');

Route::get('/archivos/{id}/eliminar', 'ArchivosController@destroy');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/usuarios','HomeController@usuarios');
});