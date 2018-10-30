<?php

namespace App\Repositories\Eloquents;

use App\Models\Job;
use App\Repositories\Contracts\HomeRepositoryInterface;

class HomeRepository implements HomeRepositoryInterface
{
    public function jobsCount()
    {
        return Job::all()->count();
    }
}