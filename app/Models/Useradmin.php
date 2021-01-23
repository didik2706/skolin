<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Useradmin extends Authenticatable
{
    // use Notifiable;

    protected $guard = 'useradmin';

    protected $fillable = [
        'nama', 'email', 'no_whatsapp', 'password', 'sekolah_id', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function sekolah(){
        return $this->belongsTo('App\Models\Sekolah');
    }

}
