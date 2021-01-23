<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\UserActivation;
use Illuminate\Support\Facades\Mail;

use App\Models\Sekolah;

class HomeController extends Controller
{
//     public function kirim_email()
//     {
//        Mail::to('fherycobains@gmail.com')->send(new UserActivation());
        
//         echo 'Im send your email. please check your inbox';
//    }
    public function index()
    {
        // $school = School::orderBy('id','desc')->take(4)->get();
        $rekoms = Sekolah::where('jenis_sekolah', 'Daycare')->orWhere('jenis_sekolah', 'Preschool')
                            ->orWhere('jenis_sekolah', 'TK')->orWhere('jenis_sekolah', 'PAUD')
                            ->orWhere('jenis_sekolah', 'Primary')->orWhere('jenis_sekolah', 'SD')
                            ->orWhere('jenis_sekolah', 'Secondary')->orWhere('jenis_sekolah', 'SMP')
                            ->orWhere('jenis_sekolah', 'High School')->orWhere('jenis_sekolah', 'SMA - MA')
                            ->orWhere('jenis_sekolah', 'SMK')->orWhere('jenis_sekolah', 'Program Vokasi')
                            ->orWhere('jenis_sekolah', 'Program Sarjana')->orWhere('jenis_sekolah', 'Program Pasca Sarjana')
                            ->orWhere('jenis_sekolah', 'Sekolah Pesantren')->orWhere('jenis_sekolah', 'Sekolah Bola')
                            ->orWhere('jenis_sekolah', 'Sekolah Futsal')->orWhere('jenis_sekolah', 'Sekolah Basket')
                            ->orWhere('jenis_sekolah', 'Sekolah Atletik')->orWhere('jenis_sekolah', 'Sekolah Bulutangkis')
                            ->orWhere('jenis_sekolah', 'Sekolah Olahraga Lainnya')->orderBy('updated_at', 'desc')
                            ->get();
        $ungguls = Sekolah::where('jenis_sekolah', 'Bahasa')->orWhere('jenis_sekolah', 'Komputer')
                            ->orWhere('jenis_sekolah', 'Musik')->orWhere('jenis_sekolah', 'Menggambar')
                            ->orWhere('jenis_sekolah', 'Baca')->orWhere('jenis_sekolah', 'Tari')
                            ->orWhere('jenis_sekolah', 'Desain')->orWhere('jenis_sekolah', 'Keterampilan')
                            ->orWhere('jenis_sekolah', 'Pengobatan')->orWhere('jenis_sekolah', 'Matematika')
                            ->orWhere('jenis_sekolah', 'Kursus Lainnya')->orderBy('updated_at', 'desc')
                            ->get();

        return view('home', compact('rekoms', 'ungguls'));
    }

    public function detail_sekolah($slug)
    {
        $school = School::with([
            'contacts',
            'categories',
            'runningTeks',
            'promo',
            'facility',
            'teachers',
            'videos',
            'qna'
        ])->where('slug',$slug)->firstOrFail();
            //dd($school);
        $tag = SchoolTags::where('sekolah_id',$school->id)->get();
        $menuFacility = MenuFacility::all();
        //modal fasilitas
        $fasilitas_sekolah = Facility::where('category','Sekolah')->get();
        $fasilitas_kelas = Facility::where('category','Kelas')->get();
        $fasilitas_lingkungan = Facility::where('category','Lingkungan')->get();
        //get fasilitas
        $schoolFacility = DB::table('menu_school_facilities AS a')
                                    ->join('school_facilities AS b', 'a.facilities_id', '=', 'b.id')
                                    ->select('a.*','b.*')
                                    ->where('category','Sekolah')
                                    ->get();
        $classFacility = DB::table('menu_school_facilities AS a')
                                    ->join('school_facilities AS b', 'a.facilities_id', '=', 'b.id')
                                    ->select('a.*','b.*')
                                    ->where('category','Kelas')
                                    ->get();
        $environmentFacility = DB::table('menu_school_facilities AS a')
                                    ->join('school_facilities AS b', 'a.facilities_id', '=', 'b.id')
                                    ->select('a.*','b.*')
                                    ->where('category','Lingkungan')
                                    ->get();
        //dd($schoolFacility);
        return view('pages.detail-sekolah',[
            'school' => $school,
            'tag' => $tag,
            'fasilitas_sekolah' => $fasilitas_sekolah,
            'fasilitas_kelas' => $fasilitas_kelas,
            'fasilitas_lingkungan' => $fasilitas_lingkungan,
            'schoolFacility' => $schoolFacility,
            'classFacility' => $classFacility,
            'environmentFacility' => $environmentFacility,
            'menuFacility' => $menuFacility
        ]);
    }
}
