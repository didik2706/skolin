<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = [
        'nama_sekolah', 'jenis_sekolah', 'alamat',  'no_telepon',  'logo_normal', 'logo_samping', 'fax', 'slug', 'link_sekolah', 'akreditasi', 'provinsi_id',  'kabkot_id',  'kecamatan_id',  'kelurahan_id', 'categories_id', 'tags_id'
    ];
    
    public function useradmin(){
        return $this->hasMany('App\Models\Useradmin');
    }
    public function datapendaftar(){
        return $this->hasMany('App\Models\DataPendaftar', 'slug', 'slug');
    }
    public function runningtext(){
        return $this->hasMany('App\Models\Runningtext');
    }
    public function sekolahtag(){
        return $this->hasOne('App\Models\SekolahTag');
    }
    public function sekolahpromo(){
        return $this->hasMany('App\Models\SekolahPromo');
    }
    public function sekolahprofile(){
        return $this->hasMany('App\Models\SekolahProfile');
    }
    public function sekolahguru(){
        return $this->hasMany('App\Models\SekolahGuru');
    }
    public function sekolahfasilitas(){
        return $this->hasMany('App\Models\SekolahFasilitas');
    }
    public function sekolahjadwal(){
        return $this->hasMany('App\Models\SekolahJadwal');
    }
    public function sekolahprestasi(){
        return $this->hasMany('App\Models\SekolahPrestasi');
    }
    public function sekolahprogram(){
        return $this->hasMany('App\Models\SekolahProgram');
    }
    public function sekolahprakerin(){
        return $this->hasMany('App\Models\SekolahPrakerin');
    }
    public function sekolahbursa(){
        return $this->hasMany('App\Models\SekolahBursa');
    }
    public function sekolahbeasiswa(){
        return $this->hasMany('App\Models\SekolahBeasiswa');
    }
    public function sekolahfaq(){
        return $this->hasMany('App\Models\SekolahFaq');
    }
    public function sekolahsosial(){
        return $this->hasMany('App\Models\SekolahSosial');
    }
    public function sekolahberita(){
        return $this->hasMany('App\Models\SekolahBerita');
    }
    public function provinsi(){
        return $this->hasOne('App\Models\Provinsi', 'provinsi_id', 'provinsi_id');
    }
    public function sekolahslider(){
        return $this->hasMany('App\Models\SekolahSlider');
    }
    public function sekolahfoto(){
        return $this->hasMany('App\Models\SekolahFoto');
    }
    public function sekolahekstra(){
        return $this->hasMany('App\Models\SekolahEkstra');
    }
    public function sekolahvideo(){
        return $this->hasMany('App\Models\SekolahVideo');
    }
    public function sekolahpage(){
        return $this->hasOne('App\Models\SekolahPage');
    }
}
