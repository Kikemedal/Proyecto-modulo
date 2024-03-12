<?php

namespace App\Http\Controllers;

use App\Models\character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonajesController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        if (Auth::check()) {
            $userId = Auth::id();
        } else {
            return view('/login');
        }
        $personajes = Character::where('user_id', $userId)->get();
        $viewData['personajes'] = $personajes;
        return view('personajes.index')->with("viewData", $viewData);
    }

    public function mostarPersonaje($id){
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData['personaje'] = character::find($id);
        return view('personajes.mostrar')->with("viewData", $viewData);
    }
}
