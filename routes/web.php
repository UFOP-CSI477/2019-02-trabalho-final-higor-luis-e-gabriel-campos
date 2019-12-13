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
use App\User;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('pacientes','PacienteController',['except' => ['show']]);
	Route::resource('medicos','MedicoController',['except' => ['show']]);
	Route::resource('consulta', 'ConsultaController', ['except' => ['show']]);
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::put('consulta/{id}/edit');
	Route::get('/paciente/{id}/consultas','PacienteController@minhasConsultas')->name('minhasConsultas');
	Route::get('/medico/{id}/consultas','MedicoController@minhasConsultas')->name('consultas');

});

