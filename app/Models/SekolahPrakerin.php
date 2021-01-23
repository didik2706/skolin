<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahPrakerin extends Model
{
    protected $fillable = [
        'sekolah_id', 'kalimat_pembuka', 'prakerin_id'
    ];
    public function prakerindetail(){
        return $this->hasMany('App\Models\PrakerinDetail', 'prakerin_id', 'prakerin_id');
    }
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
