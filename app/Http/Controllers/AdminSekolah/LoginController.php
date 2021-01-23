<?php

namespace App\Http\Controllers\AdminSekolah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    // use AuthenticatesUsers;

    protected $redirectTo = '/admin-sekolah/dashboard';

    public function __construct()
    {
        $this->middleware('guest', ['expext' => 'logout']);
    }

    public function username()
    {
        return 'email';
    }

    public function guard()
    {
        return Auth::guard('useradmin');
    }

    public function showLogin()
    {
        return view('adminsekolah.auth.login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('useradmin')->attempt($credential, $request->member)){
            return redirect('/admin-sekolah/dashboard');
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    // public function authenticated(Request $request, $useradmin)
    // {
    //     if (!$useradmin->verified) {
    //         auth()->logout();
    //         return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
    //     }
    //     return redirect()->intended($this->redirectPath());
    // }
}
