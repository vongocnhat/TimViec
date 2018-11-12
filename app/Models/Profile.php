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
		'experience_id',
		'office_id',
    	'desired_job',
		'desire_minimum_wage',
		'currency',
    	'career_goals',
    	'word',
    	'excel',
		'power_point',
		'other_soft',
		'profile_img',
    	'public',
		'receive_email'
	];
	
	public function jobs()
	{
		return $this->belongsToMany('App\Models\Job');
	}

	public function languages()
	{
		return $this->belongsToMany('App\Models\Language')->withPivot('listenning', 'speaking', 'reading', 'writing')->withTimestamps();
	}

	public function employee()
	{
		return $this->belongsTo('App\Models\Employee');
	}

	public function career()
	{
		return $this->belongsTo('App\Models\Career');
	}

	public function typeOfWork()
	{
		return $this->belongsTo('App\Models\TypeOfWork');
	}

	public function degree()
	{
		return $this->belongsTo('App\Models\Degree');
	}

	public function getDesireMinimumWageAAttribute() {
        return Common::money($this->desire_minimum_wage);
	}

	public function getPublicAAttribute() {
        if ($this->public === 1) {
			return __('common.yes');
		} else {
			return __('common.no');
		}
	}

	public function getReceiveEmailAAttribute() {
        if ($this->receive_email === 1) {
			return __('common.yes');
		} else {
			return __('common.no');
		}
	}
}
