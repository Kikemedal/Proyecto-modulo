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
        if (Auth::check()) {
            $userId = Auth::id();
        } else {
            return view('auth.login');
        }
        $personajes = Character::where('user_id', $userId)->get();
        $viewData['personajes'] = $personajes;
        $mensaje = $personajes->isEmpty() ? 'No has creado personajes aún' : '';
        return view('personajes.index', compact('viewData', 'mensaje'));
    }

    public function eliminar($id){
        Character::destroy($id);
        $viewData = [];
        if (Auth::check()) {
            $userId = Auth::id();
        } else {
            return view('auth.login');
        }
        $personajes = Character::where('user_id', $userId)->get();
        $viewData['personajes'] = $personajes;
        $mensaje = $personajes->isEmpty() ? 'No has creado personajes aún' : '';
        return view('personajes.index', compact('viewData', 'mensaje'));
    }
}
