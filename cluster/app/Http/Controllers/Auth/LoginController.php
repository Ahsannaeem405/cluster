<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(){


        if (auth()->user()->role == 'admin') {
            //dd(11);
        return '/admin';
        }

        else{
            if(auth()->user()->role == 'user' && auth()->user()->status==1 ){
                return '/user';
            }

            else if(auth()->user()->role == 'user' && auth()->user()->status==0){

               $msg="Your Account has been Suspended!";
                    session()->flash('message',$msg);
                return '/login';
            }
        }

     }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
