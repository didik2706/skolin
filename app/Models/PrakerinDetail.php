<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrakerinDetail extends Model
{
    protected $fillable = [
        'prakerin_id', 'nama_perusahaan'
    ];
    public function sekolahprakerin(){
        return $this->belongsTo('App\Models\SekolahPrakerin', 'prakerin_id', 'prakerin_id');
    }
}
