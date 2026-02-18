<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenMessageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->bearerToken()) {
            return response()->json([
                'message' => 'No token provided. Please login to get a token.'
            ], 401);
        }

        if (!$request->user()) {
            return response()->json([
                'message' => 'Invalid token or token expired. Please login again.'
            ], 401);
        }

        return $next($request);
    }
}