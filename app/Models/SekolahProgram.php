<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahProgram extends Model
{
    protected $fillable = [
        'sekolah_id', 'nama_program', 'sekolahprogram_id'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
    public function deskripsiprogram(){
        return $this->hasMany('App\Models\DeskripsiProgram', 'sekolahprogram_id', 'sekolahprogram_id');
    }
}
