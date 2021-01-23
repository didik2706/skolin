<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahPrestasi extends Model
{
    protected $fillable = [
        'sekolah_id', 'kalimat_pembuka', 'prestasi_id'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
    public function prestasidetail(){
        return $this->hasMany('App\Models\PrestasiDetail', 'prestasi_id', 'prestasi_id');
    }
}
