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
//companias

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('companias', 'CompaniaController@getAll');
    Route::get('companias/{compania}', 'CompaniaController@getById');
    Route::post('companias', 'CompaniaController@create');
    Route::put('companias/{compania}', 'CompaniaController@update');
    Route::delete('companias/{compania}', 'CompaniaController@delete');
});
//empleados
Route::get('empleados', 'EmpleadoController@getAll');
Route::get('empleados/{empleado}', 'EmpleadoController@getById');
Route::post('empleados', 'EmpleadoController@create');
Route::put('empleados/{empleado}', 'EmpleadoController@update');
Route::delete('empleados/{empleado}', 'EmpleadoController@delete');
//autenticacion
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
