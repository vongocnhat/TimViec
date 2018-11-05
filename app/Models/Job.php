<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Common;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $fillable = [
	    'employer_id',
		'office_id',
		'type_of_work_id',
		'degree_id',
		'experience_id',
		'salary_id',
		'name',
		'deadline',
		'viewed',
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
		'status'
	];

	public function getDeadlineAttribute() {
        return Carbon::parse($this->attributes['deadline'])->format('d/m/Y');
	}

	public function getCreatedAtAttribute() {
        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y');
	}

	public function getUpdatedAtAttribute() {
        return Carbon::parse($this->attributes['updated_at'])->format('d/m/Y');
	}

	public function getAgeAttribute() {
		return Common::mergeFromTo($this->age_from, $this->age_to, __('job_detail.age_no'));
	}

	public function getProvincesToStringAttribute() {
		return $this->provinces->implode('name', ', ');
	}

	public function getAddressAttribute() {
		$str = $this->employer->address 	. ', '
			 . $this->employer->ward->name 	. ', '
			 . $this->employer->district->name . ', '
			 . $this->employer->province->name;
		return $str;
	}

	public function employer()
	{
		return $this->belongsTo('App\Models\Employer');
	}

	public function office()
	{
		return $this->belongsTo('App\Models\Office');
	}

	public function typeOfWork()
	{
		return $this->belongsTo('App\Models\TypeOfWork');
	}

	public function degree()
	{
		return $this->belongsTo('App\Models\Degree');
	}

	public function experience()
	{
		return $this->belongsTo('App\Models\Experience');
	}

	public function salary()
	{
		return $this->belongsTo('App\Models\Salary');
	}

	public function careers()
	{
		return $this->belongsToMany('App\Models\Career');
	}

	public function profiles()
	{
		return $this->belongsToMany('App\Models\Profile');
	}

	public function languages()
	{
		return $this->belongsToMany('App\Models\Language');
	}

	public function provinces()
	{
		return $this->belongsToMany('App\Models\Province');
	}
}
