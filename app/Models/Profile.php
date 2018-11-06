<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
		'employee_id',
		'name',
		'career_id',
		'degree_id',
		'type_of_work_id',
    	'desired_job',
    	'desire_minimum_wage',
    	'career_goals',
    	'school',
    	'type_of_school',
    	'start_at',
    	'ended_at',
    	'major',
    	'graduation_type',
    	'word',
    	'excel',
		'power_point',
		'profile_img',
    	'public',
    	'receive_email'
	];
	
	public function jobs()
	{
		return $this->belongsToMany('App\Models\Job');
	}
<<<<<<< HEAD

	public function languages()
	{
		return $this->belongsToMany('App\Models\Language');
	}
=======
>>>>>>> e53ab3a5be88548143a85298c51c07b167a8e9d3
}
