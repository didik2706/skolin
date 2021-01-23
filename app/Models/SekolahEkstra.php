<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahEkstra extends Model
{
    protected $fillable = [
        'sekolah_id', 'kalimat_pembuka', 'ekstra_id'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
    public function ekstradetail(){
        return $this->hasMany('App\Models\EkstraDetail', 'ekstra_id', 'ekstra_id');
    }
}
