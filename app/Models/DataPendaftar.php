<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPendaftar extends Model
{
    protected $fillable = [
        'slug', 'nama_lengkap', 'status', 'email', 'no_whatsapp'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah', 'slug', 'slug');
    }
}
