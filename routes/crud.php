<?php

/**
 * Definimos las rutas para el CRUD
 * CREAR
 * LEER
 * ACTUALIZAR
 * ELIMINAR
 */

use App\Http\Controllers\EscuelaController;
use App\Http\Controllers\FacultadController;
use Illuminate\Support\Facades\Route;

 /**
  * Ruta para las facultades
  */
  Route::prefix("facultad")->controller(FacultadController::class)->group(function(){
    Route::get("/","index")->name("facultad.index"); 
    Route::get("/create","create")->name("facultad.create");
    Route::get("/{facultad}/editar","editar")->name("facultad.editar");
    Route::post("/save","store")->name("facultad.save");
    Route::delete("/delete/{id}","eliminarFacultad")->name("facultad.delete");
    Route::put("/{facultad}/editar","modificar")->name("facultad.modificar");
    Route::get("/facultades/papelera","Papelera")->name("facultad.papelera");
    Route::put("/facultad/{id}/active","activar")->name("facultad.activar");
    Route::delete("{id}/delete","Borrado")->name("facultad.borrado");
  });

  /**
   * Rutas para las escuelas
   */
  Route::prefix("escuela")->controller(EscuelaController::class)->group(function(){
    Route::get("/","index")->name("escuela.index"); 
    Route::get("/create","create")->name("escuela.create");
    Route::get("/{escuela}/editar","editar")->name("escuela.editar");
    Route::post("/save","store")->name("escuela.save");
    Route::delete("/delete/{id}","eliminarEscuela")->name("escuela.delete");
    Route::put("/{escuela}/modificar","modificar")->name("escuela.modificar");
  });


