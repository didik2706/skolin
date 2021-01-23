<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EkstraDetail extends Model
{
    protected $fillable = [
        'ekstra_id', 'nama_ekstrakulikuler'
    ];
    public function sekolahekstra(){
        return $this->belongsTo('App\Models\SekolahEkstra', 'ekstra_id', 'ekstra_id');
    }
}
