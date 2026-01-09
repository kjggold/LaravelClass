<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
            // alias middleware (route middleware)
            $middleware->alias([
                'check.email' => \App\Http\Middleware\CheckEmail::class,
                //'admin.email' => \App\Http\Middleware\Admin::class,>> //all middlewares are declared under this
                'check.password' => \App\Http\Middleware\CheckPassword::class,
            ]);
    })


    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
