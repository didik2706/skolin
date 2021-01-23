<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahSosial extends Model
{
    protected $fillable = [
        'sekolah_id', 'facebook', 'twitter', 'instagram', 'youtube'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
