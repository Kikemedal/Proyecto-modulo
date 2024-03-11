<?php

use Illuminate\Support\Facades\Auth;
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


//Ruta de Inicio
Route::get('/', function () {
    return view('index');
}) -> name('index');


//Rutas formulario
Route::get('/formularioPersonaje', 'App\Http\Controllers\FormulariosController@index' ) -> name('formularioPersonaje');
Route::get('/formularioNombre', 'App\Http\Controllers\FormulariosController@formularioNombre' ) -> name('formularioNombre');



Auth::routes();

//rutas hechas por Ian
Route::get('/form1', "App\Http\Controllers\CreadorController@form1")->name("creacion-pj.form1");
Route::get('/form2', "App\Http\Controllers\CreadorController@form2")->name("creacion-pj.form2");
Route::get('/personajes', "App\Http\Controllers\PersonajesController@index")->name("personajes.index");