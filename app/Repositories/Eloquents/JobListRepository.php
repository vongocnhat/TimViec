<?php

namespace App\Repositories\Eloquents;

use App\Models\Job;
use App\Models\Career;
use App\Models\Profile;
use App\Models\Province;
use App\Repositories\Contracts\JobListRepositoryInterface;

class JobListRepository implements JobListRepositoryInterface
{
    public function careers()
    {
        return Career::pluck('career', 'id');
    }

    public function salaries()
    {
        $salaries = [
            5000000 => __('common.over') . ' ' . number_format(5000000, null, null, '.') . ' ' . __('common.million'),
            10000000 => __('common.over') . ' ' . number_format(10000000, null, null, '.')  . ' ' . __('common.million'),
            15000000 => __('common.over') . ' ' . number_format(15000000, null, null, '.')  . ' ' . __('common.million'),
            20000000 => __('common.over') . ' ' . number_format(20000000, null, null, '.')  . ' ' . __('common.million'),
            25000000 => __('common.over') . ' ' . number_format(25000000, null, null, '.')  . ' ' . __('common.million')
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