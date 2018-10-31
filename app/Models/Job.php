<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $fillable = [
	    'employer_id',
		'office_id',
		'type_of_work_id',
		'degree_id',
		'career_ids',
		'language_ids',
		'name',
		'deadline',
		'viewed',
		'wage_from',
		'wage_to',
		'experience',
		'quantity',
		'probationary_period',
		'gender',
		'age_from',
		'age_to',
		'job_description',
		'benefit',
		'other_requirements',
		'apply_online',
		'contact_person',
		'email',
		'phone'
	];

	protected $dates = ['deadline'];

	public function employer()
	{
		return $this->belongsTo('App\Models\Employer');
	}
}
