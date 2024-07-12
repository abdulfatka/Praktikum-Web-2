<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$levels): Response
    {
        $user = auth()->user();

        if ($user && ($user->role === 'administrator')) {
            return $next($request);
        }

        // Jika role bukan administrator, cek apakah role adalah dosen
        if ($user && $user->role === 'dosen') {
            // Cek apakah pengaksesan rute adalah rute untuk mengelola mahasiswa atau rombongan belajar
            if ($request->is('admin/mahasiswa*') || $request->is('admin/rombongan_belajar*')) {
                return $next($request);
            }
        }

        return response()->view('401', [], 401);
    }
}
