<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Método apunta a la vista de login
    public function index()
    {
        return view("user_authenticate.login");
    }

    /**
     * Proceso de login
     */

    public function loginSigIn(Request $datalogin)
    {
        // Credenciales
      $Credenciales = $datalogin->only("email","password");

      /// capturamos si se dio recordar la sesion
      $Remember = $datalogin->filled("remember");
     
      if(Auth::attempt($Credenciales,$Remember)){ /// booleano true false
        $datalogin->session()->regenerate();

        return redirect()->route("dashboard");
      }

      return redirect()->route("login");
      
    }

    /**
     * Proceso de cerra sesion del sistema
     */

     public function cerrar_sesion(Request $request)
     {
        Auth::logout();

        /// invalidar la sesion
        $request->session()->invalidate();

        /// regenerar el token csrf
        $request->session()->regenerateToken();

        return redirect()->route("login");
     }
}
