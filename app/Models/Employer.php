<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employer extends Authenticatable
{
    protected $fillable = [
        'first_name',
    	'last_name',
    	'email',
    	'phone',
    	'password',
    	'company_name',
    	'company_size',
    	'landline_phone',
    	'about_company',
    	'province_id',
    	'district_id',
    	'ward_id',
    	'address',
    	'website',
    	'forget_password'
    ];

    protected $hidden = [
        'password', 'forget_password',
    ];
}
