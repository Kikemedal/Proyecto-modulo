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


Route::get('/formularioNombre', 'App\Http\Controllers\FormulariosController@formularioNombre' ) -> name('formularioNombre');
Route::get('/formularioClases', 'App\Http\Controllers\FormulariosController@formularioNombreEnviar' ) -> name('formularioNombreEnviar');
Route::get('/formularioDemografico', 'App\Http\Controllers\FormulariosController@formularioClasesEnviar' ) -> name('formularioClasesEnviar');
Route::get('/formularioMotivacionsEnviar', 'App\Http\Controllers\FormulariosController@formularioDemograficoEnviar' ) -> name('formularioDemograficoEnviar');
Route::post('/formularioPersonaje1', 'App\Http\Controllers\FormulariosController@formularioMotivacionEnviar' ) -> name('formularioMotivacionEnviar');
Route::get('/formularioPersonaje', 'App\Http\Controllers\PersonajesController@formulario' ) -> name('formularioPersonaje');
Route::get('/formularioPersonaje{id}', 'App\Http\Controllers\PersonajesController@eliminar' ) -> name('personajes.eliminar');



Auth::routes();

//rutas hechas por Ian

Route::get('/Formulario_razas', "App\Http\Controllers\FormulariosController@formularioNombre")->name("Formulario_razas");
Route::get('/Formulario_clases', "App\Http\Controllers\FormulariosController@formularioClases")->name("Formulario_clases");
Route::get('/personajes', "App\Http\Controllers\PersonajesController@index")->name("personajes.index");
