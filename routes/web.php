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

// Ruta para visualizar los usuarios que están en la BD
Route::get('/', 'UserController@listar');

// Ruta para acceder al formulario de los usuarios
Route::get('/form', 'UserController@userform');

// Ruta para guardar los usuarios en la BD
Route::post('/save', 'UserController@save')->name('save');

// Ruta para eliminar usuarios
// Route::delete('/delete/{id}', 'UserController@delete')->name('delete');
