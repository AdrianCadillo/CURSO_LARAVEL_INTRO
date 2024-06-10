<?php

use Illuminate\Support\Facades\Route;

Route::get("/clientes",function(){
    return "CLIENTES";
});

// Route::prefix("administradores")->group(function(){
//   Route::get("/invitado",function(){
//     return "INVITADO";
//   });

//   Route::get("/invitado1",function(){
//     return "invitado1";
//   });
// });