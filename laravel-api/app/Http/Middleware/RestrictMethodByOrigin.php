<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RestrictMethodByOrigin
{
    /**
     * Daftar izin: [Origin => [Metode yang diizinkan]]
     */
    protected $allowed = [
        'http://localhost:8000' => ['GET', 'POST', 'PUT', 'DELETE'],

        'http://localhost:9001' => ['POST'],
        'http://localhost:9002' => ['GET', 'POST'],
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $origin = $request->header('Origin');
        
        if (isset($this->allowed[$origin])) {
            if (in_array($request->method(), $this->allowed[$origin])) {
                return $next($request);
            }
        }
        
        return response()->json(['error' => 'Method Not Allowed for this origin.'], 405);
    }
}