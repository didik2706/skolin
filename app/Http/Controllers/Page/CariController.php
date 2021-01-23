<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use DB;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class CariController extends Controller
{
    public function cariSekolah(Request $request)
    {
        $cari = $request->cari;
        $sekolah = Sekolah::where('nama_sekolah', 'like', "%".$cari."%")
                        ->first();
        return view('pages.cari.all', compact('sekolah', 'cari'));
    }

    public function daycare()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Daycare')->paginate(6);
        // $sekolahs = Sekolah::all();
        return view('pages.cari.daycare', compact('sekolahs'))->with($this->data);
    }

    public function getDayCare(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Daycare')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }
    
    public function preschool()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Preschool')->paginate(6);
        return view('pages.cari.preschool', compact('sekolahs'))->with($this->data);
    }

    public function getPreSchool(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Preschool')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function tk()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'TK')
                            ->orWhere('jenis_sekolah', 'PAUD')->paginate(6);
        return view('pages.cari.tk', compact('sekolahs'))->with($this->data);
    }

    public function getTk(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'TK')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }
    
    public function primary()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Primary')->paginate(6);
        return view('pages.cari.primary', compact('sekolahs'))->with($this->data);
    }

    public function getPrimary(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Primary')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }
    
    public function sdn()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'SD')->paginate(6);
        return view('pages.cari.sdn', compact('sekolahs'))->with($this->data);
    }

    public function getSdn(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'SD')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function secondary()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Secondary')->paginate(6);
        return view('pages.cari.secondary', compact('sekolahs'))->with($this->data);
    }

    public function getSecondary(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Secondary')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function smp()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'SMP')->paginate(6);
        return view('pages.cari.smp', compact('sekolahs'))->with($this->data);
    }

    public function getSmp(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'SMP')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function highSchool()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'High School')->paginate(6);
        return view('pages.cari.highschool', compact('sekolahs'))->with($this->data);
    }

    public function getHighSchool(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'High School')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function sma()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'SMA - MA')->paginate(6);
        return view('pages.cari.sma', compact('sekolahs'))->with($this->data);
    }

    public function getSma(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'SMA - MA')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function smk()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'SMK')->paginate(6);
        return view('pages.cari.smk', compact('sekolahs'))->with($this->data);
    }

    public function getSmk(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'SMK')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function kuliah()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Program Vokasi')
                            ->orWhere('jenis_sekolah', 'Program Sarjana')
                            ->orWhere('jenis_sekolah', 'Program Pasca Sarjana')
                            ->paginate(6);
        return view('pages.cari.kuliah', compact('sekolahs'))->with($this->data);
    }

    public function getKuliah(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Program Vokasi')
                        ->orWhere('jenis_sekolah', 'Program Sarjana')
                        ->orWhere('jenis_sekolah', 'Program Pasca Sarjana')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function pesantren()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Pondok Pesantren')->paginate(6);
        return view('pages.cari.pesantren', compact('sekolahs'))->with($this->data);
    }

    public function getPesantren(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Pondok Pesantren')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function sepakbola()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Bola')->paginate(6);
        return view('pages.cari.sepakbola', compact('sekolahs'))->with($this->data);
    }
    
    public function getSepakbola(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Bola')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function futsal()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Futsal')->paginate(6);
        return view('pages.cari.futsal', compact('sekolahs'))->with($this->data);
    }

    public function getFutsal(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Futsal')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function basket()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Basket')->paginate(6);
        return view('pages.cari.basket', compact('sekolahs'))->with($this->data);
    }

    public function getBasket(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Basket')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function bulutangkis()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Bulutangkis')->paginate(6);
        return view('pages.cari.bulutangkis', compact('sekolahs'))->with($this->data);
    }

    public function getBuluTangkis(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Bulutangkis')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function atletik()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Atletik')->paginate(6);
        return view('pages.cari.atletik', compact('sekolahs'))->with($this->data);
    }

    public function getAtletik(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Atletik')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function renang()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Renang')->paginate(6);
        return view('pages.cari.renang', compact('sekolahs'))->with($this->data);
    }

    public function getRenang(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Renang')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    // public function beasiswaDn()
    // {
        // $this->data['provinsi'] = Province::all();
        // $this->data['kabkot'] = Regency::all();
        // $this->data['kecamatan'] = District::all();
        // $this->data['kelurahan'] = Village::all();
    //     $sekolahs = Sekolah::paginate(6);
    //     return view('pages.cari.beasiswadn', compact('sekolahs'))->with($this->data);
    // }

    // public function beasiswaLn()
    // {
        // $this->data['provinsi'] = Province::all();
        // $this->data['kabkot'] = Regency::all();
        // $this->data['kecamatan'] = District::all();
        // $this->data['kelurahan'] = Village::all();
    //     $sekolahs = Sekolah::paginate(6);
    //     return view('pages.cari.beasiswaln', compact('sekolahs'))->with($this->data);
    // }

    // public function magangDn()
    // {
        // $this->data['provinsi'] = Province::all();
        // $this->data['kabkot'] = Regency::all();
        // $this->data['kecamatan'] = District::all();
        // $this->data['kelurahan'] = Village::all();
    //     $sekolahs = Sekolah::paginate(6);
    //     return view('pages.cari.magangdn', compact('sekolahs'))->with($this->data);
    // }

    // public function magangLn()
    // {
        // $this->data['provinsi'] = Province::all();
        // $this->data['kabkot'] = Regency::all();
        // $this->data['kecamatan'] = District::all();
        // $this->data['kelurahan'] = Village::all();
    //     $sekolahs = Sekolah::paginate(6);
    //     return view('pages.cari.magangln', compact('sekolahs'))->with($this->data);
    // }

    public function bahasa()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Bahasa')->paginate(6);
        return view('pages.cari.bahasa', compact('sekolahs'))->with($this->data);
    }

    public function getBahasa(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Bahasa')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function komputer()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Komputer')->paginate(6);
        return view('pages.cari.komputer', compact('sekolahs'))->with($this->data);
    }

    public function getKomputer(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Komputer')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function musik()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Musik')->paginate(6);
        return view('pages.cari.musik', compact('sekolahs'))->with($this->data);
    }

    public function getMusik(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Musik')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function tari()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Tari')->paginate(6);
        return view('pages.cari.tari', compact('sekolahs'))->with($this->data);
    }

    public function getTari(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Tari')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function desain()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Desain')->paginate(6);
        return view('pages.cari.desain', compact('sekolahs'))->with($this->data);
    }

     public function getDesain(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Desain')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }
    
    public function keterampilan()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Keterampilan')->paginate(6);
        return view('pages.cari.keterampilan', compact('sekolahs'))->with($this->data);
    }

    public function getKeterampilan(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Keterampilan')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }
    
    public function baca()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Baca')->paginate(6);
        return view('pages.cari.baca', compact('sekolahs'))->with($this->data);
    }

    public function getBaca(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Baca')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function pengobatan()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Pengobatan')->paginate(6);
        return view('pages.cari.pengobatan', compact('sekolahs'))->with($this->data);
    }

    public function getPengobatan(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Pengobatan')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function matematika()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Matematika')->paginate(6);
        return view('pages.cari.matematika', compact('sekolahs'))->with($this->data);
    }

    public function getMatematika(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Matematika')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function bimbel()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Bimbel')->paginate(6);
        return view('pages.cari.bimbel', compact('sekolahs'))->with($this->data);
    }

    public function getBimbel(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Bimbel')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function beladiri()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Silat')
                            ->orWhere('jenis_sekolah', 'Karate')
                            ->orWhere('jenis_sekolah', 'Tarung Drajat')
                            ->orWhere('jenis_sekolah', 'Taekwondo')
                            ->orWhere('jenis_sekolah', 'Aikido')
                            ->orWhere('jenis_sekolah', 'Kempo')
                            ->orWhere('jenis_sekolah', 'Kungfu')
                            ->orWhere('jenis_sekolah', 'Muaythai')
                            ->orWhere('jenis_sekolah', 'Yong Moo do')
                            ->orWhere('jenis_sekolah', 'Perguruan Beladiri Lainnya')
                        ->paginate(6);
        return view('pages.cari.beladiri', compact('sekolahs'))->with($this->data);
    }

    public function getBeladiri(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Silat')
        ->orWhere('jenis_sekolah', 'Karate')
                        ->orWhere('jenis_sekolah', 'Tarung Drajat')
                        ->orWhere('jenis_sekolah', 'Taekwondo')
                        ->orWhere('jenis_sekolah', 'Aikido')
                        ->orWhere('jenis_sekolah', 'Kempo')
                        ->orWhere('jenis_sekolah', 'Kungfu')
                        ->orWhere('jenis_sekolah', 'Muaythai')
                        ->orWhere('jenis_sekolah', 'Yong Moo do')
                        ->orWhere('jenis_sekolah', 'Perguruan Beladiri Lainnya')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function slb()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'SLB')->paginate(6);
        return view('pages.cari.slb', compact('sekolahs'))->with($this->data);
    }

    public function getSlb(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'SLB')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function pilot()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Pilot')->paginate(6);
        return view('pages.cari.pilot', compact('sekolahs'))->with($this->data);
    }

    public function getPilot(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Pilot')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    public function pramugari()
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Pramugari')->paginate(6);
        return view('pages.cari.pramugari', compact('sekolahs'))->with($this->data);
    }

    public function getPramugari(Request $request)
    {   
        $search = $request->search_list;
        $provinsi = $request->provinsi;
        $kabkot = $request->kabkot;
        $kecamatan = $request->kecamatan;
        $sekolahs = Sekolah::where('jenis_sekolah', 'Sekolah Pramugari')
                        ->where('nama_sekolah', 'like', "%".$search."%")
                        ->orWhere('provinsi_id', 'like', "%".$provinsi."%")
                        ->orWhere('kabkot_id', 'like', "%".$kabkot."%")
                        ->orWhere('kecamatan_id', 'like', "%".$kecamatan."%")
                        ->paginate(6);

        return view('pages.cari.filter', compact('sekolahs', 'search', 'provinsi', 'kabkot', 'kecamatan'));
    }

    // public function promo()
    // {
        // $this->data['provinsi'] = Province::all();
        // $this->data['kabkot'] = Regency::all();
        // $this->data['kecamatan'] = District::all();
        // $this->data['kelurahan'] = Village::all();
    //     $sekolahs = Sekolah::paginate(6);
    //     return view('pages.cari.promo', compact('sekolahs'))->with($this->data);
    // }

    // public function payment()
    // {
        // $this->data['provinsi'] = Province::all();
        // $this->data['kabkot'] = Regency::all();
        // $this->data['kecamatan'] = District::all();
        // $this->data['kelurahan'] = Village::all();
    //     $sekolahs = Sekolah::paginate(6);
    //     return view('pages.cari.payment', compact('sekolahs'))->with($this->data);
    // }

}
