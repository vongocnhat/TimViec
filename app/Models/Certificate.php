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
    ];

public function profile()
	{
		return $this->belongsTo('App\Models\Profile');
	}
public function graduate()
	{
		return $this->belongsTo('App\Models\Graduate');
	}
}