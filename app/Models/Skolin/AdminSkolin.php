<?php

namespace App\Models\Skolin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminSkolin extends Authenticatable
{
    protected $guard = 'adminskolin';

    protected $fillable = [
        'nama', 'email', 'no_whatsapp', 'password'
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
}
