<?php

/**
 * Rutas para la authenticación
 */

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::controller(LoginController::class)->group(function(){
   Route::get("/login","index")->name("login");
});