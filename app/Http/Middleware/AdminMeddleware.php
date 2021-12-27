<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMeddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role_id == 1 ) {
            return $next($request);
        }elseif (Auth::check() && Auth::user()->role_id == 3 ) {

            return $next($request);
        }elseif (Auth::check() && Auth::user()->role_id == 5 ) {

            return $next($request);
        }elseif (Auth::check() && Auth::user()->role_id == 4 ) {

            return $next($request);
        }elseif (Auth::check() && Auth::user()->role_id == 6 ) {

            return $next($request);
        }else{

            return redirect()->route('login');
        }
    }
}
