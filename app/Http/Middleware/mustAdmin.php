<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class mustAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!auth()->check()) {
            // Pengguna belum masuk, arahkan mereka ke halaman keluar (logout)
            abort(404); // Gantilah '/logout' dengan URL yang sesuai untuk halaman keluar Anda
        }

        $userRole = auth()->user()->id_role;

        if($userRole !== 2 ){
            abort(404);
        }
        return $next($request);
    }
}
