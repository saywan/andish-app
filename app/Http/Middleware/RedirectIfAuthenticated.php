<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role_id == 1) {

            return redirect()->route('portal.index');

        } else if (Auth::guard($guard)->check()  && Auth::user()->role_id == 4) {

            return redirect()->route('portal.index');

        }else if (Auth::guard($guard)->check()  && Auth::user()->role_id == 3) {

            return redirect()->route('portal.index');

        }else if (Auth::guard($guard)->check()  && Auth::user()->role_id == 5) {

            return redirect()->route('portal.index');

        }else if (Auth::guard($guard)->check()  && Auth::user()->role_id == 6) {

            return redirect()->route('portal.index');

        }else{

            return $next($request);

        }


      /*  if (Auth::guard($guard)->check() && auth()->user()->hasAnyRole(['Admin'] )) {
            return redirect()->route('portal.index');

        }else if (Auth::guard($guard)->check() && auth()->user()->hasAnyRole(['User'] )) {
            return redirect()->route('portal.User');
        } else{
            return $next($request);
        }*/
       // return redirect('/home');
     /*   if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);*/
    }
}
