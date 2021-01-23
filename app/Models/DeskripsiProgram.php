<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeskripsiProgram extends Model
{
    protected $fillable = [
        'sekolahprogram_id', 'foto', 'deskripsi', 'keunggulan', 'yang_dipelajari', 'prospek', 'jumlah_sesi', 'syarat', 'biaya_id'
    ];
    public function sekolahprogram(){
        return $this->belongsTo('App\Models\SekolahProgram', 'sekolahprogram_id', 'sekolahprogram_id');
    }
    public function biayaprogram(){
        return $this->hasMany('App\Models\BiayaProgram', 'biaya_id', 'biaya_id');
    }
}
