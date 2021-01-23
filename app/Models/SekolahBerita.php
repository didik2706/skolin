<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahBerita extends Model
{
    protected $fillable = [
        'sekolah_id', 'judul', 'deskripsi', 'foto'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
