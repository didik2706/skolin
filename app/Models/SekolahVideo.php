<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahVideo extends Model
{
    protected $fillable = [
        'sekolah_id', 'link'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
