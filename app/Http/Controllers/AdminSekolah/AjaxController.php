<?php

namespace App\Http\Controllers\AdminSekolah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class AjaxController extends Controller
{
    public function filterKabkot(Request $request)
    {
        $kabkot = Regency::where("province_id", $request->provinsi_id)
                            ->orderBy('name', 'asc')
                            ->get();

        return response()->json($kabkot);
    }
    public function filterKecamatan(Request $request)
    {
        $kecamatan = District::where("regency_id", $request->kabkot_id)
                                ->orderBy('name', 'asc')
                                ->get();

        return response()->json($kecamatan);
    }
    public function filterKelurahan(Request $request)
    {
        $kelurahan = Village::where("district_id", $request->kecamatan_id)
                                ->orderBy('name', 'asc')
                                ->get();

        return response()->json($kelurahan);
    }
}
