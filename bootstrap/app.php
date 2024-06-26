<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
       
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        // then:function(){
        //     Route::middleware("web")
        //     ->prefix("empleados")
        //     ->group(base_path("routes/administradores.php"));
        // }
        using:function(){

            Route::middleware("web")
            
            ->group(base_path("routes/web.php"));

            Route::middleware("web")
            ->group(base_path("routes/administradores.php"));

            Route::middleware("web")
            ->group(base_path("routes/clase6.php"));

            Route::middleware("web")
            ->group(base_path("routes/crud.php"));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->validateCsrfTokens([
           "/producto/save" 
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
