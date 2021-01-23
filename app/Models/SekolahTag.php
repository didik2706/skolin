<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahTag extends Model
{
    protected $fillable = [
        'sekolah_id', 'tag_name'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
