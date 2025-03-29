<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VerifiedJemaatMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('verified_jemaat_id')) {
            return redirect()->route('umkm.authForm')->with('error', 'Silakan verifikasi identitas terlebih dahulu.');
        }

        return $next($request);
    }
}