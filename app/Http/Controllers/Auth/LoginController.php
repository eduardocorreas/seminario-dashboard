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
    protected function redirectTo()
    {
        if(Auth::user()->type_user === 0){
            return redirect('/panel/admin');
        }else if(Auth::user()->type_user === 1){
            return redirect('/panel/seminarista');
        }
    }

    protected function authenticated()
    {
        if(Auth::user()->type_user === 0){
            return redirect('/panel/admin');
        }else if(Auth::user()->type_user === 1){
            return redirect('/panel/seminarista');
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
