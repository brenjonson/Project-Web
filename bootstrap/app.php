<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\AdminCheck;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
            // $middleware->append(AdminCheck::class);
    $middleware->alias([
        'admin' => AdminCheck::class
    ]);


            // $middleware->append(EnsureUserHasRole::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
