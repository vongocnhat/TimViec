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
	
	public function province()
	{
		return $this->belongsTo('App\Models\Province');
	}

	public function district()
	{
		return $this->belongsTo('App\Models\District');
	}

	public function ward()
	{
		return $this->belongsTo('App\Models\Ward');
	}

	public function getNameAttribute() {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
	}

	public function jobs() {
		return $this->hasMany('App\Models\Job');
	}
}
