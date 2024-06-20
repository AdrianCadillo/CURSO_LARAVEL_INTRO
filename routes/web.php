<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/prueba",function(){
//   return "SOY LA RUTA DE PRUEBA";
// });

/**
 * Rutas para categorias
 */

 Route::get("/categorias",function(){
   return view("categoria.index");
 });

 Route::get("/categoria/create",function(){
    return view("categoria.create");
  });

 /// editar categorias
 Route::get("/categoria/{id?}",function($id = null){
     if(is_null($id))
     {
        return "solo una categoria";
     }

     return "VAMOS A EDITAR EL ID:".$id;
 });

 /**
  * Match y any
  */
Route::match(["get","put","post"],"/varios-verbos",function(){
    if(request()->isMethod("GET"))
    {
        return "GET";
    } 

    return request();
})->name("variosverbos");



/**
 * Rutas para categorias
 */
Route::get("/categorias/todo",[CategoriaController::class,'mostrarCategorias']);

/**
 * Llamando procedimiento almacenados
 */
Route::get("/procedimiento1",function(){
  $usuarios = DB::select('call todousers(?)',[1]);

  return $usuarios;
});

