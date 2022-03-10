<?php

use Illuminate\Support\Facades\Route;

//Controlador donde estaran las funciones
use App\Http\Controllers\WeatherController;


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

//ruta predeterminada laravel con la view welcome
Route::get('/', function () {
    return view('welcome');
});

//Route::post('/index', [WeatherController::class, 'store']);

//ruta index con nuestra view index
Route::get('/Home', function () {
    return view('index');
});

//ruta con la funcion zipCodePost donde haremos toda la busqueda de la api
Route::get('/weatherInfo',[WeatherController::class, 'zipCodePost']);

//ruta POST para recoger el codigo postal de la clase
Route::post('/weatherInfo',[WeatherController::class, 'zipCodePost']);

//ruta con la funcion Store para guardar los datos en la base de datos para el top5
//Route::put('/weatherInfo',[WeatherController::class, 'store']);



//Llamamos al controlador WeatherController y usamos la funcion WeatherInfo
//Route::get('/weatherInfo',[WeatherController::class,'indexWeather']);
