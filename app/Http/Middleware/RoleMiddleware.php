<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        // Check if the user is logged in
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the user's role matches the required role
        if ($user->role->name !== $role) {
            return redirect('/');  // Redirect to home page or another "no access" page
        }

        return $next($request);
    }
}
