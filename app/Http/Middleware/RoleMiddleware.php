<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check() || !Auth::user()->hasAnyRole($roles)) {
            // Redirect or show an unauthorized response
            return redirect('/')->with('error', 'You do not have permission to access this resource.');
        }
        return $next($request);
    }
}
