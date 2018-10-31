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
            5000000,
            10000000,
            15000000,
            20000000,
            25000000
        ];
        return $salaries;
    }

    public function experiences()
    {
        $experiences = [
            1,
            2,
            3,
            4,
            5
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
        return Job::where('office_id', 1)->get();
    }
    
    public function labor()
    {
        return Job::where('degree_id', '<=', 3)->get();
    }

    public function student()
    {
        return Job::where('type_of_work_id', 2)->get();
    }
}