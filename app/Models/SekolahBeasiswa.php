<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahBeasiswa extends Model
{
    protected $fillable = [
        'sekolah_id', 'kalimat_pembuka', 'nama_beasiswa', 'deskripsi', 'perusahaan_pemberi', 'beasiswa_id'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
    public function beasiswadetail(){
        return $this->hasMany('App\Models\BeasiswaDetail', 'beasiswa_id', 'beasiswa_id');
    }
}
