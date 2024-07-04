<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JqueryController extends Controller
{
    // Método index
    public function index()
    {
       return view("formulario"); 
    }


    /**Método para el validacion  */

    public function store(Request $request)
    {
        $Validacion = Validator::make($request->all(),[
            "nombres" => "required",
            "apellidos" => "required",
            "direccion" => "required"
        ],
        [
            "nombres.required" => "Complete el campo nombres!",
            "apellidos.required" => "Complete el campo apellidos!",
            "direccion.required" => "Complete el campo dirección!"
        ]);


        if($request->ajax())
        {
           if($Validacion->fails())
           {
             return response()->json(["errors" =>$Validacion->errors()]);
           } 

           return response()->json(["response" => "Producto registrado!"]);
        }

        return back()->withErrors($Validacion)->withInput();
    }
}
