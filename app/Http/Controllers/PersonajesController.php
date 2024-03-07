<?php

namespace App\Http\Controllers;

use App\Models\character;
use Illuminate\Http\Request;

class PersonajesController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData['personajes'] = character::all();
        return view('personajes.index')->with("viewData", $viewData);
    }
}
