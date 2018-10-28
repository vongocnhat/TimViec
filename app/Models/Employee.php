<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    protected $fillable = [
        'first_name',
		'last_name',
		'email',
		'phone',
		'password',
		'birthday',
		'province',
		'district',
		'ward',
		'address',
		'gender',
		'married',
		'forget_password'
    ];

    protected $hidden = [
        'password', 'forget_password',
    ];
}
