<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect('index'); //Vista con inicio de sesión erroneo?
        }

        //Si no esta logeado devolvemos la vista para poder logarse.
    }


    /**Funcion que vamos a usar para comprobar que el usuario existe y logear al usuario */


    public function login(Request $request){

        //validamos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        //Comprobamos que el usuario existe en la base de datos
        $credentials = $request->only('email', 'password');

        // Si el usuario existe lo logamos y lo llevamos a la vista de "logados" con un mensaje.
	    if (Auth::attempt($credentials)) {
	        return redirect()->intended('index') //actualmente apunta al indice, pero deberia de enviar a la lista de personajes.
	            ->withSuccess('Logado Correctamente');
	    }
	
	    // Si el usuario no existe devolvemos al usuario al formulario de login con un mensaje de error
	    return redirect("/")->withSuccess('Los datos introducidos no son correctos');


    }

    public function logados()
	{
	    if (Auth::check()) {
	        return view('index'); //Si esta logado, envia al usuario al indice, hay que camnbiarlo
	    }
	    return redirect("/")->withSuccess('No tienes acceso, por favor inicia sesión'); //Si no esta logado, le envia al formulario de login
    }
}
