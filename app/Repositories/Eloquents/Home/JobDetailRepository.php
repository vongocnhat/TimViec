<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Job;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Eloquents\Home\JobBaseRepository;
use App\Repositories\Contracts\Home\JobDetailRepositoryInterface;

class JobDetailRepository extends JobBaseRepository implements JobDetailRepositoryInterface
{
    public function job($id)
    {
        return Job::with('careers', 'experience')->whereRaw('`status` = 1')->findOrFail($id);
    }

    public function profilesById()
    {
        return Auth::guard('employee')->user()->profiles()->pluck('name', 'employee_id');
    }
}