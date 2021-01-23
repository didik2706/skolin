<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahFaq extends Model
{
    protected $fillable = [
        'sekolah_id', 'pertanyaan', 'jawaban'
    ];
    public function sekolahfaq(){
        return $this->belongsTo('App\Models\SekolagFaq');
    }
}
