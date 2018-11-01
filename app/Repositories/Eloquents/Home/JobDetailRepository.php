<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Job;
use App\Models\Profile;
use App\Repositories\Eloquents\Home\JobBaseRepository;
use App\Repositories\Contracts\Home\JobDetailRepositoryInterface;

class JobDetailRepository extends JobBaseRepository implements JobDetailRepositoryInterface
{
    public function job($id)
    {
        return Job::findOrFail($id);
    }

    public function profiles()
    {
        return Profile::pluck('name', 'employee_id');
    }
}