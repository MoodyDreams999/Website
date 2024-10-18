<?php
protected $middlewareGroups = [
    'web' => [
        // other middleware
        \App\Http\Middleware\NoCache::class,
    ],
];
protected $routeMiddleware = [
    // other middleware
    'auth' => \App\Http\Middleware\Authenticate::class,
    'role' => \App\Http\Middleware\RoleMiddleware::class, // This should be here
    'admin' => \App\Http\Middleware\AdminMiddleware::class,
];
