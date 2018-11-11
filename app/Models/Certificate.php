<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
		'profile_id',
		'graduate_id',
		'name',
		'school',
    	'start_at',
    	'ended_at',
    	'major',
		'certificate_img'
    ];
}
