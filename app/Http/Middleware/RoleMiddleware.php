<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if ($request->user() === null) {
            // User is not logged in, redirect them to the login page
            return redirect('/login');
        }

        // Get the user's role from the authenticated user object
        $role = $request->user()->role;

        // Check if the user has the required role
        if ($role != 'admin') {
            // User does not have the required role, return a 403 Forbidden response
            abort(403, 'Unauthorized');
        }

        // User has the required role, proceed with the request
        return $next($request);
    }
}
