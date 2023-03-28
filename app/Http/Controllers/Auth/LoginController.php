<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //tutor 64
        public function showLoginForm()
    {
        return view('auth.auth_login_basic');
    }

        //tutor 64
        public function showLoginFormWali()
    {
        return view('auth.auth_login_basic_wali');
    }


        public function authenticated (Request $request, $user)
    {
        if ($user->akses == 'operator' || $user->akses == 'admin') {
            return redirect()->route('operator.beranda');
        } elseif ( $user->akses == 'wali'){
            return redirect()->route('wali.beranda');
        } else {
            Auth::logout();
            flash ('anda tidak memiliki akses') ->error ();
            return redirect()->route('login');
        }
        
    }
}
