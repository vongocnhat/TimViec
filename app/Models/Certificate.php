<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
    	'profile_id',
		'name',
		'certificate_img'
    ];
}
