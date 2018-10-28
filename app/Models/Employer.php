<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employer extends Authenticatable
{
    protected $fillable = [
        
    ];

    protected $hidden = [
        'password', 'forget_password',
    ];
}
