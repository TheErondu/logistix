<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        if (Auth::check() && Auth::user()->role == 1) {
            return redirect()->route('superadmin');
        }
        elseif (Auth::check() && Auth::user()->user_type == 'client') {
            return redirect()->route('customer');
        }
        elseif (Auth::check() && Auth::user()->user_type == 'warehouser') {
            return redirect()->route('customer');
        }
        elseif (Auth::check() && Auth::user()->user_type == 'team') {
            return redirect()->route('customer');
        }
        elseif (Auth::check() && Auth::user()->user_type == 'trucker') {
            return redirect()->route('customer');
        }
        elseif (Auth::check() && Auth::user()->user_type == 'admin') {
            return $next($request);
        }
        else {
            return redirect()->route('login');
        }
    }
}
