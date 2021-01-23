<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahSlider extends Model
{
    protected $fillable = [
        'sekolah_id', 'link_gambar', 'foto'
    ];

    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
