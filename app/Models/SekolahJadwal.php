<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahJadwal extends Model
{
    protected $fillable = [
        'sekolah_id', 'jumlah_sesi', 'hari', 'dari_jam', 'sampai_jam'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
