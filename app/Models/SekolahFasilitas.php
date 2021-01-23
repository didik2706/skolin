<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahFasilitas extends Model
{
    protected $fillable = [
        'sekolah_id', 'nama_fasilitas', 'icon'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
