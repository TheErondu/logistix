<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    public function redirectTo()
    {
        switch(Auth::user()->user_type){
            case "admin":
            $this->redirectTo = '/customer';
            return $this->redirectTo;
                break;
            case 4:
                    $this->redirectTo = '/customer';
                return $this->redirectTo;
                break;
            case "trucker":
                $this->redirectTo = '/customer';
                return $this->redirectTo;
                break;
            case "client":
                    $this->redirectTo = '/customer';
                return $this->redirectTo;
                break;
            case "warehouser":
                $this->redirectTo = '/customer';
                return $this->redirectTo;
                break;
            case "superadmin":
                $this->redirectTo = '/customer';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
         
        // return $next($request);
    } 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
}
