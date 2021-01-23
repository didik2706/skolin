<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class LocationController extends Controller
{
    public function provinces(Request $request)
    {
    	return Province::all();
    }

    public function regencies(Request $request, $provinces_id)
    {
    	return Regency::where('province_id', $provinces_id)->get();
    }

    public function district(Request $request, $regency_id)
    {
    	return District::where('regency_id', $regency_id)->get();
    }

    public function village(Request $request, $district_id)
    {
    	return Village::where('district_id', $district_id)->get();
    }
}
