<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna sudah login
        if (!$request->user()) {
            return redirect()->route('admin.login');
        }

        // Periksa apakah pengguna adalah Admin
        if (!$request->user()->is_admin) {
            abort(403, 'Akses ditolak. Halaman ini khusus Admin.');
        }

        return $next($request);
    }
}
