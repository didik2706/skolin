<?php

namespace App\Http\Controllers\AdminSekolah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:useradmin');
    }

    public function guard()
    {
        return Auth::guard('useradmin');
    }
    
    public function home()
    {
        return view('adminsekolah.home');
    }
}
