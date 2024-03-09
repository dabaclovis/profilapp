<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirection(Request $request)
    {
        $this->validate($request,[
            'email' => ['required','string','max:255'],
            'password' => [ 'required','string','min:8'],
        ]);
            if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                if (Auth::user()->roles == 'user') {
                    $request->session()->regenerate();
                    return to_route('home');
                } elseif(Auth::user()->roles == 'admin') {
                    $request->session()->regenerate();
                    return to_route('admins.index');
                }

            }else{
                    return to_route('login');
                }
    }
}
