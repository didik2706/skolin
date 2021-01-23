<?php

namespace App\Http\Controllers\AdminSekolah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Runningtext;
use App\Models\Sekolah;
use App\Models\SekolahTag;
use Illuminate\Support\Str;
use App\Models\SekolahPromo;
use App\Models\SekolahProfile;
use App\Models\SekolahGuru;
use App\Models\SekolahPrakerin;
use App\Models\PrakerinDetail;
use App\Models\PrestasiDetail;
use App\Models\SekolahPrestasi;
use App\Models\SekolahBursa;
use App\Models\BursaDetail;
use App\Models\SekolahBeasiswa;
use App\Models\BeasiswaDetail;
use App\Models\SekolahFaq;
use App\Models\SekolahSosial;
use App\Models\SekolahBerita;
use App\Models\SekolahSlider;
use App\Models\SekolahEkstra;
use App\Models\EkstraDetail;
use App\Models\SekolahJadwal;
use App\Models\SekolahVideo;
use App\Models\SekolahProgram;
use App\Models\DeskripsiProgram;
use App\Models\BiayaProgram;
use App\Models\SekolahFoto;
use App\Models\SekolahFasilitas;
use App\Models\Useradmin;
use App\Models\SekolahPage;

class BrosurController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:useradmin');
    }
    public function index()
    {
        return view('adminsekolah.pages.brosur.index');
    }
    public function edit()
    {
        return view('adminsekolah.pages.brosur.edit');
    }
    public function postRunningText(Request $request)
    {
        // $running_text = new Runningtext();
        $sekolah_id = $request->sekolah_id;
        $text = $request->text;
        for($i=0; $i<count($text); $i++)
        {
            $data = array(
                'sekolah_id' => $sekolah_id[$i],
                'text' => $text[$i]
            );
            $insert[] = $data;
        }
        Runningtext::insert($insert);
        return redirect()->back();
    }
    public function patchDataSekolah(Request $request)
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

        $sekolah = Sekolah::where('id', $request->sekolah_id)->update([
            'nama_sekolah' => $request->nama_sekolah,
            'alamat' => $request->alamat,
            'akreditasi' => $request->akreditasi,
            'logo_normal' => $logo_normal,
            'logo_samping' => $logo_samping
        ]);
        if($sekolah)
        {
            $tag = new SekolahTag();
            $tag->sekolah_id = $request['sekolah_id'];
            $tag->tag_name = $request['tags'];
            $tag->save();
        }
        return redirect()->back();
    }
    public function postPromo(Request $request)
    {
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = Str::slug($request->judul).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->move("storage/sekolah/promo/", $name);
            $foto = $name;
        } else {
            $foto = '';
        }

        $promo = new SekolahPromo();
        $promo->sekolah_id = $request['sekolah_id'];
        $promo->jumlah_tiket = $request['jumlah_tiket'];
        $promo->jenis = $request['jenis'];
        $promo->judul = $request['judul'];
        $promo->awal = $request['awal'];
        $promo->akhir = $request['akhir'];
        $promo->syarat = $request['syarat'];
        $promo->foto = $foto;
        $promo->save();
        return redirect()->back();
        // dd($promo);
    }
    public function postProfile(Request $request)
    {
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = Str::slug($request->nama).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->move("storage/sekolah/profile/", $name);
            $foto = $name;
        } else {
            $foto = '';
        }

        $profile = new SekolahProfile();
        $profile->sekolah_id = $request['sekolah_id'];
        $profile->foto = $foto;
        $profile->nama = $request['nama'];
        $profile->jabatan = $request['jabatan'];
        $profile->profile = $request['profile'];
        $profile->save();
        return redirect()->back();
    }
    public function postGuru(Request $request)
    {
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = Str::slug($request->nama_pengajar).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->move("storage/sekolah/guru/", $name);
            $foto = $name;
        } else {
            $foto = '';
        }

        $guru = new SekolahGuru();
        $guru->sekolah_id = $request['sekolah_id'];
        $guru->nama_pengajar = $request['nama_pengajar'];
        $guru->jabatan = $request['jabatan'];
        $guru->pend_terakhir = $request['pend_terakhir'];
        $guru->nama_sekolah = $request['nama_sekolah'];
        $guru->penghargaan = $request['penghargaan'];
        $guru->visi = $request['visi'];
        $guru->motto = $request['motton'];
        $guru->foto = $foto;
        $guru->save();
        return redirect()->back();
    }
    public function detailGuru($id)
    {
        $guru = SekolahGuru::find($id);
        return view('adminsekolah.pages.guru.detail', compact('guru'));
    }
    public function postPrestasi(Request $request)
    {
        $uniq = uniqid();
        $prestasi = new SekolahPrestasi();
        $prestasi->sekolah_id = $request['sekolah_id'];
        $prestasi->kalimat_pembuka = $request['kalimat_pembuka'];
        $prestasi->prestasi_id = $uniq;
        $prestasi->save();
        if($prestasi)
        {
            $no = $prestasi->prestasi_id;
            $nama_prestasi = $request->nama_prestasi;
            for($i=0; $i<count($nama_prestasi); $i++)
            {
                $data = array(
                    'prestasi_id' => $no,
                    'nama_prestasi' => $nama_prestasi[$i]
                );
                $insert[] = $data;
            }
            PrestasiDetail::insert($insert);
        }
        return redirect()->back();
    }
    public function postPrakerin(Request $request)
    {
        $uniq = uniqid();
        $prakerin = new SekolahPrakerin();
        $prakerin->sekolah_id = $request['sekolah_id'];
        $prakerin->kalimat_pembuka = $request['kalimat_pembuka'];
        $prakerin->prakerin_id = $uniq;
        $prakerin->save();
        if($prakerin)
        {
            $no = $prakerin->prakerin_id;
            $nama_perusahaan = $request->nama_perusahaan;
            for($i=0; $i<count($nama_perusahaan); $i++)
            {
                $data = array(
                    'prakerin_id' => $no,
                    'nama_perusahaan' => $nama_perusahaan[$i]
                );
                $insert[] = $data;
            }
            PrakerinDetail::insert($insert);
        }
        return redirect()->back();
    }
    public function postBursa(Request $request)
    {
        $uniq = uniqid();
        $bursa = new SekolahBursa();
        $bursa->sekolah_id = $request['sekolah_id'];
        $bursa->kalimat_pembuka = $request['kalimat_pembuka'];
        $bursa->bursa_id = $uniq;
        $bursa->save();
        if($bursa)
        {
            $no = $bursa->bursa_id;
            $nama_perusahaan = $request->nama_perusahaan;
            for($i=0; $i<count($nama_perusahaan); $i++)
            {
                $data = array(
                    'bursa_id' => $no,
                    'nama_perusahaan' => $nama_perusahaan[$i]
                );
                $insert[] = $data;
            }
            BursaDetail::insert($insert);
        }
        return redirect()->back();
    }
    public function postBeasiswa(Request $request)
    {
        $uniq = uniqid();
        $beasiswa = new SekolahBeasiswa();
        $beasiswa->sekolah_id = $request['sekolah_id'];
        $beasiswa->kalimat_pembuka = $request['kalimat_pembuka'];
        $beasiswa->nama_beasiswa = $request['nama_beasiswa'];
        $beasiswa->deskripsi = $request['deskripsi'];
        $beasiswa->perusahaan_pemberi = $request['perusahaan_pemberi'];
        $beasiswa->beasiswa_id = $uniq;
        $beasiswa->save();
        if($beasiswa)
        {
            $no = $beasiswa->beasiswa_id;
            $syarat = $request->syarat;
            for($i=0; $i<count($syarat); $i++)
            {
                $data = array(
                    'beasiswa_id' => $no,
                    'syarat' => $syarat[$i]
                );
                $insert[] = $data;
            }
            BeasiswaDetail::insert($insert);
        }
        return redirect()->back();
    }
    public function postFaq(Request $request)
    {
        $faq = new SekolahFaq();
        $faq->sekolah_id = $request['sekolah_id'];
        $faq->pertanyaan = $request['pertanyaan'];
        $faq->jawaban = $request['jawaban'];
        $faq->save();
        return redirect()->back();
    }
    public function patchKontak(Request $request)
    {
        $id = $request->sekolah_id;
        $sekolah = Sekolah::where('id', $id)->update([
            'link_sekolah' => $request->link_sekolah,
            'no_telepon' => $request->no_telepon
        ]);
        if($sekolah)
        {
            $user = Useradmin::where('sekolah_id', $id)->update([
                'no_whatsapp' => $request->no_whatsapp,
                'email' => $request->email
            ]);
        }
        return redirect()->back();
    }
    public function postSosial(Request $request)
    {
        $sosial = new SekolahSosial();
        $sosial->sekolah_id = $request['sekolah_id'];
        $sosial->facebook = $request['facebook'];
        $sosial->twitter = $request['twitter'];
        $sosial->instagram = $request['instagram'];
        $sosial->youtube = $request['youtube'];
        $sosial->save();
        return redirect()->back();
    }
    public function postBerita(Request $request)
    {
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = Str::slug($request->judul).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->move("storage/sekolah/berita/", $name);
            $foto = $name;
        } else {
            $foto = '';
        }

        $berita = new SekolahBerita();
        $berita->sekolah_id = $request['sekolah_id'];
        $berita->judul = $request['judul'];
        $berita->deskripsi = $request['deskripsi'];
        $berita->foto = $foto;
        $berita->save();
        return redirect()->back();
    }
    public function postSlider(Request $request)
    {
        if($request->hasFile('foto')){
            foreach($request->file('foto') as $image)
            {
                $id = $request->sekolah_id;
                $link = $request->link_gambar;
                $name = $image->getClientOriginalName();
                $image->move("storage/sekolah/slider", $name);
                $data[] = $name;
            }
        }
        $image = $data;

        for($i=0; $i<count($link); $i++)
        {
            $data = array(
                'sekolah_id' => $id,
                'link_gambar' => $link[$i],
                'foto' => $image[$i]
            );
            $insert[] = $data;
        }
        SekolahSlider::insert($insert);
        // dd($insert);
        return redirect()->back();
        // dd($sliderfoto);
    }
    public function postEkstra(Request $request)
    {
        $uniq = uniqid();
        $ekstra = new SekolahEkstra();
        $ekstra->sekolah_id = $request['sekolah_id'];
        $ekstra->kalimat_pembuka = $request['kalimat_pembuka'];
        $ekstra->ekstra_id = $uniq;
        $ekstra->save();
        if($ekstra)
        {
            $no = $ekstra->ekstra_id;
            $nama_ekstrakulikuler = $request->nama_ekstrakulikuler;
            for($i=0; $i<count($nama_ekstrakulikuler); $i++)
            {
                $data = array(
                    'ekstra_id' => $no,
                    'nama_ekstrakulikuler' => $nama_ekstrakulikuler[$i]
                );
                $insert[] = $data;
            }
            EkstraDetail::insert($insert);
        }
        return redirect()->back();
    }
    public function postJadwal(Request $request)
    {
        $id = $request->sekolah_id;
        $sesi = $request->jumlah_sesi;
        $hari = $request->hari;
        $dari = $request->dari_jam;
        $sampai = $request->sampai_jam;
        
        for($i=0; $i<count($hari); $i++)
        {
            $data = array(
                'sekolah_id' => $id,
                'jumlah_sesi' => $sesi,
                'hari' => $hari[$i],
                'dari_jam' => $dari[$i],
                'sampai_jam' => $sampai[$i]
            );
            $insert[] = $data;
        }
        SekolahJadwal::insert($insert);
        return redirect()->back();
  
    }
    public function postVideo(Request $request)
    {
        $video = new SekolahVideo();
        $video->sekolah_id = $request['sekolah_id'];
        $video->link = $request['link'];
        $video->save();
        return redirect()->back();
    }
    public function postProgram(Request $request)
    {
        $data = $request->all();
        return response()->json($data);
    }
    public function postAddPRogram(Request $request)
    {
        $nomor = uniqid();
        $program = new SekolahProgram();
        $program->sekolah_id = $request['sekolah_id'];
        $program->nama_program = $request['nama_program'];
        $program->sekolahprogram_id = $nomor;
        $program->save();

        if($program)
        {
            if($request->hasFile('foto')) {
                $file = $request->file('foto');
                $name = $file->getClientOriginalName();
                $request->file('foto')->move("storage/sekolah/program/", $name);
                $foto = $name;
            } else {
                $foto = '';
            }

            $no = uniqid();
            $desc = new DeskripsiProgram();
            $desc->sekolahprogram_id = $program->sekolahprogram_id;
            $desc->foto = $foto;
            $desc->deskripsi = $request['deskripsi'];
            $desc->keunggulan = $request['keunggulan'];
            $desc->yang_dipelajari = $request['yang_dipelajari'];
            $desc->prospek = $request['prospek'];
            $desc->jumlah_sesi = $request['jumlah_sesi'];
            $desc->syarat = $request['syarat'];
            $desc->biaya_id = $no;
            $desc->save();

            if($desc)
            {
                $biaya_id = $desc->biaya_id;
                $rincian = $request->rincian;
                $harga = $request->harga;

                for($i=0; $i<count($rincian); $i++)
                {
                    $data = array(
                        'biaya_id' => $biaya_id,
                        'rincian' => $rincian[$i],
                        'harga' => $harga[$i]
                    );
                    $insert[] = $data;
                }
                BiayaProgram::insert($insert);
                return redirect()->back();
            }
        }
    }
    public function postFolder(Request $request)
    {
        $data = $request->all();
        return response()->json($data);
    }
    public function postFoto(Request $request)
    {

        if($request->hasFile('foto')) {
            $slug = uniqid();
            $file = $request->file('foto');
            $name = Str::slug($slug).'.'.$file->getClientOriginalExtension();
            $request->file('foto')->move("storage/sekolah/foto/", $name);
            $foto = $name;
        } else {
            $foto = '';
        }

        $fotofile = new SekolahFoto();
        $fotofile->sekolah_id = $request['sekolah_id'];
        $fotofile->nama_folder = $request['nama_folder'];
        $fotofile->foto = $foto;
        $fotofile->save();
        return redirect()->back();
        // dd($fotofile);
    }
    public function postFasilitas(Request $request)
    {
        $sekolah_id = $request->sekolah_id;
        $nama_fasilitas = $request->nama_fasilitas;
        $icon = $request->icon;
        for($i=0; $i<count($nama_fasilitas); $i++)
        {
            $data = array(
                'sekolah_id' => $sekolah_id[$i],
                'nama_fasilitas' => $nama_fasilitas[$i],
                'icon' => $icon[$i]
            );
            $insert[] = $data;
        }
        SekolahFasilitas::insert($insert);
        return redirect()->back();
    }

    // update page sekolah
    public function patchPage1(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page1' => $request->page1
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage2(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page2' => $request->page2
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage3(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page3' => $request->page3
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage4(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page4' => $request->page4
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage5(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page5' => $request->page5
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage6(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page6' => $request->page6
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage7(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page7' => $request->page7
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage8(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page8' => $request->page8
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage9(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page9' => $request->page9
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage10(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page10' => $request->page10
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage11(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page11' => $request->page11
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage12(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page12' => $request->page12
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage13(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page13' => $request->page13
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage14(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page14' => $request->page14
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
    public function patchPage15(Request $request, $id)
    {
        $page = SekolahPage::where('id', $id)->update([
            'page15' => $request->page15
        ]);
        return redirect()->back()->with('success', 'Page Berhasil Diupdate');
    }
}
