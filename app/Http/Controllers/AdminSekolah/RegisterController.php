<?php

namespace App\Http\Controllers\AdminSekolah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Str;
use Auth;
use App\Models\Sekolah;
use App\Models\Useradmin;
use App\Models\User;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\DataPendaftar;
use App\Mail\UserActivation;
use App\Models\SekolahPage;
use DB;
use Mail;
use Crypt;
use App\Models\UserAdminActivation;

class RegisterController extends Controller
{
    // use AuthenticatesUsers;

    protected $redirectTo = '/admin-sekolah/dashboard';

    // public function __construct()
    // {
    //     $this->middleware('adminsekolah');
    // }
    public function __construct()
    {
        $this->middleware('guest:useradmin');
    }

    protected function guard()
    {
        return Auth::guard('useradmin');
    }


    public function showRegister()
    {
        return view('adminsekolah.auth.register');
    }
    public function showRegisterJenis(Request $request)
    {
        $sekolah = $request->session()->get('sekolah');
        return view('adminsekolah.auth.jenis_sekolah', compact('sekolah'));
    }    
    public function postRegisterJenis(Request $request)
    {
        $validasi = $request->validate([
            'jenis_sekolah' => 'required',
        ]);
        $sekolah = new Sekolah();
        $sekolah->jenis_sekolah = $request['jenis_sekolah'];
        $request->session()->put('sekolah', $sekolah);
        return redirect('/admin-sekolah/register/data-sekolah');
    }
    public function showRegisterData(Request $request)
    {
        $this->data['provinsi'] = Province::all();
        $this->data['kabkot'] = Regency::all();
        $this->data['kecamatan'] = District::all();
        $this->data['kelurahan'] = Village::all();
        $sekolah = $request->session()->get('sekolah');
        if(!session()->has('sekolah')){
            return redirect('/');
        }
        return view('adminsekolah.auth.datasekolah', compact('sekolah'))->with($this->data);
    }
    public function postRegisterData(Request $request)
    {
        if($request->hasFile('logo_normal')) {
            $file = $request->file('logo_normal');
            $name = Str::slug($request->nama_sekolah).'.'.$file->getClientOriginalExtension();
            $request->file('logo_normal')->move("storage/sekolah/files/", $name);
            $logo_normal = $name;
        } else {
            $logo_normal = '';
        }
        if($request->hasFile('logo_samping')) {
            $file = $request->file('logo_samping');
            $name = Str::slug($request->nama_sekolah).'.'.$file->getClientOriginalExtension();
            $request->file('logo_samping')->move("storage/sekolah/files/", $name);
            $logo_samping = $name;
        } else {
            $logo_samping = '';
        }
        
        $slug = uniqid();
        $link = "https://skolin.id/";
        $sekolah = $request->session()->get('sekolah');
        // $sekolah = new Sekolah();
        $sekolah->nama_sekolah = $request['nama_sekolah'];
        $sekolah->alamat = $request['alamat'];
        $sekolah->no_telepon = $request['no_telepon'];
        $sekolah->logo_normal = $logo_normal;
        $sekolah->logo_samping = $logo_samping;
        $sekolah->fax = $request['fax'];
        $sekolah->slug = $slug;
        $sekolah->link_sekolah = $link.$request['nama_sekolah'];
        // $sekolah->status = $request['status'];
        // $sekolah->email = $request['email'];
        $sekolah->akreditasi = $request['akreditasi'];
        $sekolah->provinsi_id = $request['provinsi_id'];
        $sekolah->kabkot_id = $request['kabkot_id'];
        $sekolah->kecamatan_id = $request['kecamatan_id'];
        $sekolah->kelurahan_id = $request['kelurahan_id'];
        $sekolah->categories_id = $request['categories_id'];
        $sekolah->tags_id = $request['tags_id'];

        if($sekolah){
            $pendaftar = DataPendaftar::create([
                'slug' => $sekolah->slug,
                'nama_lengkap' => $request['nama_pendaftar'],
                'status' => $request['status_pendaftar'],
                'email' => $request['email_pendaftar'],
                'no_whatsapp' => $request['no_pendaftar']
            ]);
        }

        $request->session()->put('sekolah', $sekolah);
        return redirect('/admin-sekolah/register/verifikasi');
        // dd($sekolah);
        // $sekolah->save();

        // if($sekolah){
        //     $userAdmin = UserAdmin::create([
        //        'status' => $request->status,
        //         'no_telepon' => $sekolah['no_telepon'],
        //         'email' => $request->email,
        //         'password' => bcrypt($request->password),
        //         'sekolah_id' => $sekolah->id
        //     ]);
        // }
        // // dd($sekolah);
        // $request->session()->forget('sekolah');
        // $request->session()->flush();
        // $this->guard()->login($sekolah);


        // return redirect('/admin-sekolah/dashboard');
    }

    public function showVerifikasi(Request $request)
    {
        $sekolah = $request->session()->get('sekolah');
        if(!session()->has('sekolah')){
            return redirect('/');
        }
        return view('adminsekolah.auth.verifikasi', compact('sekolah'));
    }
    public function postVerifikasi(Request $request)
    {
        $sekolah = $request->session()->get('sekolah');

        $sekolah->save();

        // if($sekolah){
        //     $pendaftar = DataPendaftar::create([
        //         'sekolah_id' => $sekolah->id,
        //         'nama_lengkap' => $request['nama_pendaftar'],
        //         'status' => $request['status_pendaftar'],
        //         'email' => $request['email_pendaftar'],
        //         'no_whatsapp' => $request['no_pendaftar']
        //     ]);
        // }

        if($sekolah){
            $slug = uniqid();
            $page = SekolahPage::create([
                'sekolah_id' => $sekolah->id,
                'page_id' => $slug,
                'page1' => "Profile",
                'page2' => "Guru",
                'page3' => "Fasilitas",
                'page4' => "Ekstrakulikuler",
                'page5' => "Jam Belajar",
                'page6' => "Prestasi",
                'page7' => "Program",
                'page8' => "Prakerin",
                'page9' => "Bursa Kerja",
                'page10' => "Beasiswa",
                'page11' => "FAQ",
                'page12' => "Kontak",
                'page13' => "Social Media",
                'page14' => "Video",
                'page15' => "Berita Sekolah"
            ]);
        }

        if($sekolah){
            $useradmin = Useradmin::create([
                'nama' => $request->status,
                'no_whatsapp' => $request['no_whatsapp'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'sekolah_id' => $sekolah->id,
            ]);
          
            // dd($useradmin);
        }
        $request->session()->flush();
        $request->session()->forget('sekolah');
        // $this->guard()->login($useradmin);

        Mail::to($useradmin->email)->send(new UserActivation($useradmin));
        return redirect('/admin-sekolah/login')
                ->with('success',"We sent activation code. Please check your mail.");


    }
    // public function verifyUser($token)
    // {
    //     $check = Useradmin::where('token',$token)->first();


    //     if(!is_null($check)){
    //         $useradmin = Useradmin::find($check->useradmin_id);


    //         if($useradmin->activation->is_activated == 1){
    //             return redirect('/admin-sekolah/login')
    //                 ->with('success',"useradmin are already actived.");                
    //         }


    //         $useradmin->activation->update(['is_activated' => 1]);
    //         DB::table('useradmins_activation')->where('token',$token)->delete();


    //         return redirect('/admin-sekolah/login')
    //             ->with('success',"useradmin active successfully.");
    //     }


    //     return redirect('/admin-sekolah/login')
    //             ->with('warning',"your token is invalid.");
                
    // }

    public function verifyUser()
    {
        return view('adminsekolah.emails.home');
    }
}
