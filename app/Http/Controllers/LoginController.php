<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Método apunta a la vista de login
    public function index()
    {
        return view("user_authenticate.login");
    }
}
