<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //Método para mostrar todas las categorias
    public function mostrarCategorias()
    {
       $categorias = Categoria::all();
       return view("tipos.index",compact("categorias")); 
    }
}
