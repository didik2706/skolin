<?php

namespace App\Http\Controllers\AdminSkolin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/skolin-panel/dashboard';

    public function __construct()
    {
        $this->middleware('guest:adminskolin', ['expext' => 'logout']);
    }

    public function username()
    {
        return 'email';
    }

    public function guard()
    {
        return Auth::guard('adminskolin');
    }

    public function showLogin()
    {
        return view('adminskolin.auth.login');
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

        if(Auth::guard('adminskolin')->attempt($credential, $request->member)){
            return redirect('/skolin-panel/dashboard');
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect()->route('skolin-panel.login');
    }
}
