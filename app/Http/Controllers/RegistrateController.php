<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrateController extends Controller
{
    //Método create para mostrar el formulario de registrar usuarios
    public function create()
    {
        return view("user_authenticate.register");
    }

    public function store(Request $request)
    {
        $usuario = User::create($request->all());

        /// authenticarnos
        Auth::login($usuario);

        return redirect()->route("dashboard");
    }
}
