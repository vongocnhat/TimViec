<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Job;
use App\Models\Career;
use App\Models\Profile;
use App\Models\Province;

abstract class JobBaseRepository
{
    public function careers()
    {
        return Career::pluck('name', 'id');
    }

    public function salaries()
    {
        $salaries = [
            5 => number_format(5, null, null, '.') . ' ' . __('common.million'),
            10 => number_format(10, null, null, '.')  . ' ' . __('common.million'),
            15 => number_format(15, null, null, '.')  . ' ' . __('common.million'),
            20 => number_format(20, null, null, '.')  . ' ' . __('common.million'),
            25 => number_format(25, null, null, '.')  . ' ' . __('common.million')
        ];
        return $salaries;
    }

    public function experiences()
    {
        $experiences = [
            1 => 1 . ' ' . __('common.year'),
            2 => 2 . ' ' . __('common.year'),
            3 => 3 . ' ' . __('common.year'),
            4 => 4 . ' ' . __('common.year'),
            5 => 5 . ' ' . __('common.year')
        ];
        return $experiences;
    }

    public function provinces()
    {
        return Province::pluck('name', 'id');
    }

    public function manager()
    {
        return Job::where('office_id', 2)->get();
    }
    
    public function specialize()
    {
        return Job::whereRaw('LENGTH(career_ids) > 0 AND office_id = 1')->get();
    }
    
    public function labor()
    {
        return Job::where('degree_id', '<=', 3)->get();
    }

    public function student()
    {
        return Job::whereRaw('type_of_work_id IN (3, 4)')->get();
    }
}