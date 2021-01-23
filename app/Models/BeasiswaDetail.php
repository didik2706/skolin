<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeasiswaDetail extends Model
{
    protected $fillable = [
        'beasiswa_id', 'syarat'
    ];
    public function sekolahbeasiswa(){
        return $this->belongsTo('App\Models\SekolahBeasiswa', 'beasiswa_id', 'beasiswa_id');
    }
}
