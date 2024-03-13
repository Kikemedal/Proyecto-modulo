<?php

namespace App\Http\Controllers;

use App\Models\character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonajesController extends Controller
{
    public function index($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        if (Auth::check()) {
            $viewData['personajes'] = Character::where('user_id', $id)->get();
            return view('personajes.index')->with("viewData", $viewData);
        } else {
            return view ('auth.login');
        }
       
    }
}
