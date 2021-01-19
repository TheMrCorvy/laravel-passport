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

// para installar passport en heroku: heroku run php artisan passport:install
// tambien en el .gitIgnore (en la raiz del proyeccto) hay que eliminar la linea /storage/*.key para que las llaves se guerden correctamente en heroku, con la desventaja de que las llaves quedarian publicas

Route::post('/login', 'Auth\UserController@login');

Route::post('/register', 'Auth\UserController@register');

Route::group(['middleware' => 'auth:api'], function () 
{
    Route::apiResource('/precios', 'PrecioController');

    Route::apiResource('/empresas', 'EmpresaController');
    
    Route::apiResource('/alumnos', 'AlumnoController');
    
    Route::apiResource('/pagos', 'PagoController');
});