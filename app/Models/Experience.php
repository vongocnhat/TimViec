<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
    	'profile_id',
    	'company_name',
    	'office_id',
    	'start_at',
    	'ended_at',
    	'wage',
    	'job_description',
    	'achievement'
    ];
}
