<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahBursa extends Model
{
    protected $fillable = [
        'sekolah_id', 'kalimat_pembuka', 'bursa_id'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
    public function bursadetail(){
        return $this->hasMany('App\Models\BursaDetail', 'bursa_id', 'bursa_id');
    }
}
