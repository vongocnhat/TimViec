<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'employee_id',
		'career_id',
		'degree_id',
		'type_of_work_id',
		'province_ids',
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
    	'public',
    	'receive_email'
    ];
}
