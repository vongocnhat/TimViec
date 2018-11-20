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

	public function getLanguagesAAttribute()
	{
		return $this->languages->map(function ($item) {
            return collect($item['pivot'])->toArray();
		});
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

	public function office()
	{
		return $this->belongsTo('App\Models\Office');
	}

	public function experience()
	{
		return $this->belongsTo('App\Models\Experience');
	}

	public function provinces()
	{
		return $this->belongsToMany('App\Models\Province');
	}

	public function certificates()
	{
		return $this->hasMany('App\Models\Certificate');
	}

	public function experienceOfProfiles()
	{
		return $this->hasMany('App\Models\ExperienceOfProfile');
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
	
	public function getWordAAttribute() {
        switch ($this->word) {
        	case 1:
        		return __('profile.1');
        		break;
    		case 2:
    			return __('profile.2');
    			break;
    		case 3:
    			return __('profile.3');
    			break;
        	default:
        		return __('profile.4');
    			break;
        }
	}
	public function getExcelAAttribute() {
        switch ($this->excel) {
        	case 1:
        		return __('profile.1');
        		break;
    		case 2:
    			return __('profile.2');
    			break;
    		case 3:
    			return __('profile.3');
    			break;
        	default:
        		return __('profile.4');
    			break;
        }
	}
	public function getpowerpointAAttribute() {
        switch ($this->power_point) {
        	case 1:
        		return __('profile.1');
        		break;
    		case 2:
    			return __('profile.2');
    			break;
    		case 3:
    			return __('profile.3');
    			break;
        	default:
        		return __('profile.4');
    			break;
        }
	}
}
