<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
});


Route::get('/test', function() {

    $pizzas= [
        ['type' => 'peperonni', 'base' => 'queso'],
        ['type' => 'barbacoa', 'base' => 'queso y tomate'],
        ['type' => 'vegetal', 'base' => 'nada']
    ];

    return view('test', ['pizzas' => $pizzas ]);
});

