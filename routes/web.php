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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/grado', 'GradoController@index')->name('grado');
Route::get('/posgrado', 'PosgradoController@index')->name('grado');
Route::get('/administrativos', 'AdministrativosController@consulta')->middleware('auth')->name('admin-consulta');
Route::get('/login', 'AuthController@index')->name('login');

//AJAX DATA ROUTES
Route::post('/grado/validacion-cedula', 'GradoController@validacionCedula')->name('validacion-grado');
Route::post('/grado/dias', 'GradoController@dias')->name('dias-grado');
Route::post('/grado/horarios', 'GradoController@horarios')->name('horarios-grado');
Route::post('/administrativos/eliminar', 'AdministrativosController@eliminar')->name('admin-eliminar');
//AUTH
Route::post('/login-user', 'AuthController@login')->name('login-user');
Route::post('/logout', 'AuthController@logout')->name('logout');





