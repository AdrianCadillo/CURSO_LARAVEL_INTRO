<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacultadRequest;
use App\Models\Facultade;
use Illuminate\Http\Request;

class FacultadController extends Controller
{
    // Método para visualizar todas las facultades
    public function index()
    {
        /**
         * Mostramos y enviamos las facultades existentes
         */
        $facultades = Facultade::all();

        return view("facultad.index",compact("facultades"));
    }

    /**
     * Crear nuevas facultades
     */
    public function create()
    {
       return view("facultad.create"); 
    }

    /**
     * Método para registrar nueva facultad
     */
    public function store(FacultadRequest $formularioFacultad)
    {
    
        $facultad = new Facultade();
        $facultad->nombre_facultad = $formularioFacultad->nombre_facultad;

        $facultad->save();

        return redirect()
        ->route("facultad.index")
        ->with("success","Facultad registrado correctamente!");
    }

    /**
     * Método para eliminar un registro de la bd
     */

    public function eliminarFacultad($id)
    {
     /// Vamos a obtener la facultad con el id que va como parámero
     $facultad = Facultade::find($id);


     /// eliminamos la facultad

     $facultad->delete();

     return back()->with("success_delete_facultad","Facultad eliminado correctamente!");
    }

    /**
     * Método para editar facultades
     */
    public function editar(Facultade $facultad)
    {
      return view("facultad.create",compact("facultad"));
    }

    /**
     * Método para modificar una facultad
     */
    public function modificar(Facultade $facultad)
    {
        $facultad->nombre_facultad = request()->nombre_facultad;

        /// guardar los cambios

        $facultad->save();

        return redirect()
        ->route("facultad.index")
        ->with("success","Facultad modificado correctamente!");
    }
}
