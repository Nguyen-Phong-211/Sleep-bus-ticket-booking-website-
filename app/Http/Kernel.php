<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\TrustHosts;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth.check' => \App\Http\Middleware\RedirectIfNotAuthenticated::class,
        // 'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        // 'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        // 'can' => \Illuminate\Auth\Middleware\Authorize::class,
        // 'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];
}