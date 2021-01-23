<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrestasiDetail extends Model
{
    protected $fillable = [
        'prestasi_id', 'nama_prestasi'
    ];
    public function sekolahprestasi(){
        return $this->belongsTo('App\Models\SekolahPrestasi', 'prestasi_id', 'prestasi_id');
    }
}
