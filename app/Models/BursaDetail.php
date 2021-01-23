<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BursaDetail extends Model
{
    protected $fillable = [
        'bursa_id', 'nama_perusahaan'
    ];
    public function sekolahbursa(){
        return $this->belongsTo('App\Models\SekolahBursa', 'bursa_id', 'bursa_id');
    }
}
