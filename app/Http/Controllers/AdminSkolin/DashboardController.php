<?php

namespace App\Http\Controllers\AdminSkolin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:adminskolin');
    }

    public function guard()
    {
        return Auth::guard('adminskolin');
    }
    
    public function home()
    {
        return view('adminskolin.home');
    }
}
