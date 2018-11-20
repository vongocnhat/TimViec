<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceOfProfile extends Model
{
    protected $fillable = [
    	'profile_id',
    	'company_name',
    	'office_id',
    	'start_at',
    	'ended_at',
    	'job_description',
    	'achievement'
	];
	
	public function office() {
		return $this->belongsTo('App\Models\Office');
	}
}
