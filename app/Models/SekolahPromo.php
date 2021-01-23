<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahPromo extends Model
{
    protected $fillable = [
        'sekolah_id', 'jumlah_tiket', 'jenis', 'judul', 'awal', 'akhir', 'syarat', 'foto'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
