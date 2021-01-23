<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahPage extends Model
{
    protected $fillable = [
        'sekolah_id', 'page_id', 'page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8', 'page9', 'page10', 'page11', 'page12', 'page13', 'page14', 'page15'
    ];
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }
}
