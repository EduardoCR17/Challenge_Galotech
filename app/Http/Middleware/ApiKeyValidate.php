<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyValidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = $request->headers->get('api_key');     
        if (isset($key) == env('API_KEY')) {
            return $next($request);
         } else {
            return response()->json(['error' => 'unauthorized' ], 401);
         }
    }
}
