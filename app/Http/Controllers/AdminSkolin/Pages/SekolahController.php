<?php

namespace App\Http\Controllers\AdminSkolin\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:adminskolin');
    }

    public function guard()
    {
        return Auth::guard('adminskolin');
    }

    public function index()
    {
        $sekolahs = Sekolah::paginate(10);
        return view('adminskolin.pages.sekolah.index', compact('sekolahs'));
    }
}
