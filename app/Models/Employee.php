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
		'province_id',
		'district_id',
		'ward_id',
		'address',
		'gender',
		'married',
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
}
