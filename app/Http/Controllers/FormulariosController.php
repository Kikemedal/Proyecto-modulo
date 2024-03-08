<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function index(){
        return view('templates.forms');
    }


    public function formularioNombre(){
        return view('formularios.formularioName');
    }



    public function crearPersonaje(){
        
    }



    
}
