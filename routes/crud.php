<?php

/**
 * Definimos las rutas para el CRUD
 * CREAR
 * LEER
 * ACTUALIZAR
 * ELIMINAR
 */

use App\Http\Controllers\FacultadController;
use Illuminate\Support\Facades\Route;

 /**
  * Ruta para las facultades
  */
  Route::prefix("facultad")->controller(FacultadController::class)->group(function(){
    Route::get("/","index"); 
    Route::get("/create","create")->name("facultad.create");
    Route::get("/{facultad}/editar","editar")->name("facultad.editar");
    Route::post("/save","store")->name("facultad.save");
    Route::delete("/delete/{id}","eliminarFacultad")->name("facultad.delete");
  });