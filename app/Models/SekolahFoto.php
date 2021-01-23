<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahFoto extends Model
{
    protected $fillable = [
        'sekolah_id', 'nama_folder', 'foto'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
