<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonajesController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        return view('personajes.index')->with("viewData", $viewData);
    }
}
