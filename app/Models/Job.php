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

	public function getDeadlineAAttribute() {
        return Carbon::parse($this->attributes['deadline'])->format('d/m/Y');
	}

	public function getCreatedAtAAttribute() {
        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y');
	}

	public function getUpdatedAtAAttribute() {
        return Carbon::parse($this->attributes['updated_at'])->format('d/m/Y');
	}

	public function getAgeAAttribute() {
		return Common::mergeFromToAge($this->age_from, $this->age_to);
	}

	public function getProvincesToStringAAttribute() {
		return $this->provinces->implode('name', ', ');
	}

	public function getCareersToStringAAttribute() {
		return $this->careers->implode('name', ', ');
	}

	public function getAddressAAttribute() {
		$str = $this->employer->address 	. ', '
			 . $this->employer->ward->name 	. ', '
			 . $this->employer->district->name . ', '
			 . $this->employer->province->name;
		return $str;
	}

	public function getGenderAAttribute() {
		if ($this->gender) {
			return $this->gender;
		}
		else {
			return __('common.no');
		}
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
