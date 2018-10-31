<?php

namespace App\Repositories\Eloquents;

use App\Models\Job;
use App\Models\Profile;
use App\Repositories\Contracts\HomeRepositoryInterface;

class HomeRepository implements HomeRepositoryInterface
{
    public function jobsReady()
    {
        return Job::count('deadline', '>=', date("Y-m-d"));
    }

    public function profilesReady()
    {
        return Profile::count('public', true);
    }

    public function profilesCount()
    {
        return Profile::count();
    }
}