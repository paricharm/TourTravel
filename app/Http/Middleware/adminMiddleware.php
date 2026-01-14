<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If admin is NOT logged in → redirect login page
        if (!session()->has('admin_id')) {
            return redirect()->route('admin.login');
        }

        // Admin logged in → continue
        return $next($request);
    }
}
