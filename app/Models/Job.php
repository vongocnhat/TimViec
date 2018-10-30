<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $fillable = [
	    'employer_id',
		'office_id',
		'type_of_work_id',
		'career_ids',
		'language_ids',
		'name',
		'company_name',
		'deadline',
		'viewed',
		'wage_from',
		'wage_to',
		'experience',
		'literacy',
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
		'phone',
		'province_id',
		'district_id',
		'ward_id',
		'address'
	];
}
