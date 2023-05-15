<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        // if (Auth::user()->role == 'guru') {
        //     return redirect('guru/dashboard');
        // }
        // return $next($request);
        if (auth()->check() && auth()->user()->role_id === 2) {
            return $next($request);
        }
    
        return redirect('guru/dashboard');
    }
}
