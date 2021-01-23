<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiayaProgram extends Model
{
    protected $fillable = [
        'biaya_id', 'rincian', 'harga'
    ];
    public function deskripsiprogram(){
        return $this->belongsTo('App\Models\DeskripsiProgram', 'biaya_id', 'biaya_id');
    }
}
