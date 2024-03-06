<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
}) -> name('index');


Route::get('/formularioPersonaje', 'App\Http\Controllers\FormulariosController@index' ) -> name('formularioPersonaje');
Route::get('/formularioNombre', 'App\Http\Controllers\FormulariosController@formularioNombre' ) -> name('formularioNombre');

