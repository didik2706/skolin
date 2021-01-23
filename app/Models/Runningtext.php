<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Runningtext extends Model
{
    protected $fillable = [
        'sekolah_id', 'text'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
