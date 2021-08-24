<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// crud tipoAbogados 
Route::get('tipoAbogados', 'TipoAbogadoController@getAll');
Route::get('tipoAbogados/{tipoAbogado}', 'TipoAbogadoController@getById');
Route::post('tipoAbogados', 'TipoAbogadoController@create');
Route::put('tipoAbogados/{tipoAbogado}', 'TipoAbogadoController@update');
Route::delete('tipoAbogados/{tipoAbogado}', 'TipoAbogadoController@delete');

// crud  Abogados 
Route::get('abogados', 'AbogadoController@getAll');
Route::get('abogados/{abogado}', 'AbogadoController@getById');
Route::post('abogados', 'AbogadoController@create');
Route::put('abogados/{abogado}', 'AbogadoController@update');
Route::delete('abogados/{abogado}', 'AbogadoController@delete');

// crud Horarios
Route::get('horarios', 'HorarioController@getAll');
Route::get('horarios-tipoabogado/{horario}', 'HorarioController@getHorarioTipo');
Route::get('horarios/{horario}', 'HorarioController@getById');
Route::post('horarios', 'HorarioController@create');
Route::put('horarios/{horario}', 'HorarioController@update');
Route::delete('horarios/{horario}', 'HorarioController@delete');

//autenticacion
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
