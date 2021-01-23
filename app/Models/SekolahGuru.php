<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahGuru extends Model
{
    protected $fillable = [
        'sekolah_id', 'nama_pengajar', 'jabatan', 'pend_terakhir', 'nama_sekolah', 'penghargaan', 'visi', 'motto', 'foto'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
