<?php

namespace App\Models;

use Carbon\Carbon;
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

	public function profiles()
	{
		return $this->hasMany('App\Models\Profile');
	}
	
	public function getNameAttribute() {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
	}

	public function getBirthdayAAttribute() {
        return Carbon::parse($this->attributes['updated_at'])->format('d/m/Y');
	}

	public function getAddressAAttribute() {
		return $this->address . 
		' - ' . $this->ward->name . 
		' - ' . $this->district->name . 
		' - ' . $this->province->name;
	}
}
