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

Route::get('/form1', "App\Http\Controllers\CreadorController@form1")->name("creacion-pj.form1");
Route::get('/form2', "App\Http\Controllers\CreadorController@form2")->name("creacion-pj.form2");
Route::get('/personajes', "App\Http\Controllers\PersonajesController@index")->name("personajes.index");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
