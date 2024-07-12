<?php

/**
 * Rutas para la authenticación
 */

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrateController;
use Illuminate\Support\Facades\Route;

Route::controller(LoginController::class)->group(function(){
   Route::get("/login","index")->name("login")->middleware("guest");
   Route::post("/login/sign-in","loginSigIn")->name("login-signin")->middleware("guest");
   Route::post("/logout","cerrar_sesion")->name("login.logout");
});

Route::get("/dasboard",function(){
  return view("dashboard");
})->name("dashboard")->middleware("auth");

Route::get("/user/registrate",[RegistrateController::class,'create'])->name("user.registrate");
Route::post("/user/save",[RegistrateController::class,'store'])->name("user.store");