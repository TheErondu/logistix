<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Client
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
        if (Auth::check() && Auth::user()->user_type == 1) {
            return redirect()->route('superadmin');
        }
        elseif (Auth::check() && Auth::user()->user_type == "client") {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->user_type == "warehouser") {
            return redirect()->route('customer');
        }
        elseif (Auth::check() && Auth::user()->user_type == "team") {
            return redirect()->route('customer');
        }
        elseif (Auth::check() && Auth::user()->user_type == "admin") {
            return redirect()->route('customer');
        }
        elseif (Auth::check() && Auth::user()->user_type == "trucker") {
            return redirect()->route('customer');
        }
        else {
            return redirect()->route('login');
        }
    }
}
