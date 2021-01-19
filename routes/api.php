<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// en los json, en el header hay que poner siempre Accept: application/json

Route::post('/login', 'Auth\UserController@login');

Route::post('/register', 'Auth\UserController@register');

Route::group(['middleware' => 'auth:api'], function () 
{
    Route::apiResource('/precios', 'PrecioController');

    Route::apiResource('/empresas', 'EmpresaController');
    
    Route::apiResource('/alumnos', 'AlumnoController');
    
    Route::apiResource('/pagos', 'PagoController');
});