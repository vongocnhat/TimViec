<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $fillable = [
    	'name',
    	'prefix',
    	'province_id',
    	'district_id'
    ];
}
