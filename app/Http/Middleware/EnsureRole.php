<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureRole
{
    public function handle($request, Closure $next, $role)
    {
    if (Auth::check() && Auth::user()->role === $role) {
        return $next($request);
    }

    return redirect('/sign-in');
    }
}

