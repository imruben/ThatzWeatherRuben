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

Route::get('/', function () {
    return view('welcome');
});


//Llamamos a la funcion Show del controlador WeatherController para mostrar el index.blade.php
Route::get('/index',[WeatherController::class,'show']);

