<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $fillable = [
    	'profile_id',
		'name',
		'degree_img'
    ];
}
