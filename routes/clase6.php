<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/productos",function(){
  $Usuario = "Rosales Cadillo";
  return view("producto.index",["Usuarios" => $Usuario]);
})->name("producto.index");

// crear productos
// Route::get("/producto/create",function(){
//   return view("producto.create");
// })->name("producto.create");
// /// post
// Route::post("/producto/save",function(Request $request){
//    return $request;
// })->name("producto.save");

// Route::put("/producto/{id}/update",function($id){
//     return "MENSAJE DE ACTUALZIACION ".$id; 
// })->name("producto.update");

// Route::delete("/producto/{id}/delete",function($id){
//      return "ELIMINAR EL PRODUCTO ".$id;
// })->name("producto.delete");
/**
 * CREAR O MOSTRAR EL HTML FORMUALRIO
 * registrar los datos del producto
 * editar los productos
 * modificar productos
 * eliminar
 * mostrar
 * un solo producto
 */
//  Route::get("/producto/create",function(){});
//  Route::post("/producto",function(){});
//  Route::get("/producto/{id}",function(){});
//  Route::put("/producto/{id}",function(){});
//  Route::delete("/producto/{id}",function(){});
//  Route::get("/productos",function(){});
//  Route::get("/producto/{id}/show",function(){});

 Route::resource("insumo",ProductoController::class)->names("insumo");

//  Route::view("/productos/todos","producto.index",["usuario" => "CURSO PHP LARAVEL"]);

// Route::get("/producto/{categoria}",function($categoria){
//   return "LA CATEGORIA INGRESADO ES : ".$categoria;
// })->where("categoria","[a-zA-Z]+");

// Route::get("/producto/{codigo}/{sucursal}",function($codigos,$sucursal){
//     return "EL CÓDIGO INGRESADO ES : ".$codigos." Y LA SUCURSAL :".$sucursal;
// })->where(["codigo"=>"[0-9]+","sucursal"=>"[a-zA-Z]+"]);


Route::get("/producto/{categoria}",function($categoria){
    return "LA CATEGORIA INGRESADO ES : ".$categoria;
  })->whereAlpha("categoria");
  
Route::get("/producto/{codigo}/{sucursal}",function($codigos,$sucursal){
      return "EL CÓDIGO INGRESADO ES : ".$codigos." Y LA SUCURSAL :".$sucursal;
})->whereNumber("codigo")->whereAlpha("sucursal")
->whereIn("sucursal",["Lima","Arequipa"]);



