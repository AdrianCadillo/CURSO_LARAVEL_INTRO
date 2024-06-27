<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use App\Models\Facultade;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       /** MOSTRAMOS TODAS LAS ESCUELAS (escuelas , facultades)*/
       $escuelas = Escuela::join("facultades as fac","escuelas.facultad_id","=","fac.id")
       ->select("id_escuela","nombre_escuela","nombre_facultad","facultad_id")
       ->get();
       
       /**LLAMAMOS A LA VISTA INDEX */
       return view("escuela.index",compact("escuelas")); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /// obtenemos todas las facultades existentes de la base de datos
        $facultades = Facultade::all();
        // retorna a la vista index de escuela
        return view("escuela.addmodify",["facultades"=>$facultades]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Aqui vamos a guardar a una nueva escuela
        /**
         * [
         * "nombre_escuela"=>"valor",
         * "facultad_id"=>12
         * ]
         */
        $respuesta = Escuela::create($request->all());

        return $respuesta;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editar(Escuela $escuela)
    {
        //enviamos a todas las facultades
        $facultades = Facultade::all();
        return  view("escuela.addmodify",compact("escuela","facultades"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function modificar(Request $request, Escuela $escuela)
    {
        //
        $escuela->update([
            "nombre_escuela"=>$request->nombre_escuela,
            "facultad_id" => $request->facultad_id
        ]);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
