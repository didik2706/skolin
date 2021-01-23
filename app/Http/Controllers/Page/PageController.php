<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sekolah;

class PageController extends Controller
{
    public function rekom()
    {
        $rekoms = Sekolah::where('jenis_sekolah', 'Daycare')
                            ->orWhere('jenis_sekolah', 'Preschool')
                            ->orWhere('jenis_sekolah', 'TK')
                            ->orWhere('jenis_sekolah', 'PAUD')
                            ->orWhere('jenis_sekolah', 'Primary')
                            ->orWhere('jenis_sekolah', 'SD')
                            ->orWhere('jenis_sekolah', 'Secondary')
                            ->orWhere('jenis_sekolah', 'SMP')
                            ->orWhere('jenis_sekolah', 'High School')
                            ->orWhere('jenis_sekolah', 'SMA - MA')
                            ->orWhere('jenis_sekolah', 'SMK')
                            ->orWhere('jenis_sekolah', 'Program Vokasi')
                            ->orWhere('jenis_sekolah', 'Program Sarjana')
                            ->orWhere('jenis_sekolah', 'Program Pasca Sarjana')
                            ->orWhere('jenis_sekolah', 'Sekolah Pesantren')
                            ->orWhere('jenis_sekolah', 'Sekolah Bola')
                            ->orWhere('jenis_sekolah', 'Sekolah Futsal')
                            ->orWhere('jenis_sekolah', 'Sekolah Basket')
                            ->orWhere('jenis_sekolah', 'Sekolah Atletik')
                            ->orWhere('jenis_sekolah', 'Sekolah Bulutangkis')
                            ->orWhere('jenis_sekolah', 'Sekolah Olahraga Lainnya')
                            ->paginate(4);
        return view('pages.view.rekom', compact('rekoms'));
    }
    
    public function unggul()
    {
        $ungguls = Sekolah::where('jenis_sekolah', 'Bahasa')->orWhere('jenis_sekolah', 'Komputer')
                            ->orWhere('jenis_sekolah', 'Musik')->orWhere('jenis_sekolah', 'Menggambar')
                            ->orWhere('jenis_sekolah', 'Baca')->orWhere('jenis_sekolah', 'Tari')
                            ->orWhere('jenis_sekolah', 'Desain')->orWhere('jenis_sekolah', 'Keterampilan')
                            ->orWhere('jenis_sekolah', 'Pengobatan')->orWhere('jenis_sekolah', 'Matematika')
                            ->orWhere('jenis_sekolah', 'Kursus Lainnya')->paginate(4);
        return view('pages.view.unggul', compact('ungguls'));
    }
}
