<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Job;
use App\Models\Profile;
use App\Repositories\Eloquents\Home\JobBaseRepository;
use App\Repositories\Contracts\Home\HomeRepositoryInterface;

class HomeRepository implements HomeRepositoryInterface
{
    public function jobsReady()
    {
        return Job::where('deadline', '>=', date("Y-m-d"))->count();
    }

    public function profilesReady()
    {
        return Profile::where('public', true)->count();
    }

    public function profilesCount()
    {
        return Profile::count();
    }
}