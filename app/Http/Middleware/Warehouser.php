<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class Warehouser
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
        if (Auth::check() && Auth::user()->user_type == "superadmin") {
            return redirect()->route('superadmin');
        }
        elseif (Auth::check() && Auth::user()->user_type == "client") {
            return redirect()->route('customer');
        }
        elseif (Auth::check() && Auth::user()->user_type == "warehouser") {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->user_type == "team") {
            return redirect()->route('team');
        }
        elseif (Auth::check() && Auth::user()->user_type == "trucker") {
            return redirect()->route('customer');
        }
        elseif (Auth::check() && Auth::user()->user_type == "admin") {
            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
    }
}
