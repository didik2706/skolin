<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahProfile extends Model
{
    protected $fillable = [
        'sekolah_id', 'foto', 'nama', 'jabatan', 'profile'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
