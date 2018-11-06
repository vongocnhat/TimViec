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
<<<<<<< HEAD
        return Job::with('careers')->findOrFail($id);
=======
        return Job::findOrFail($id);
>>>>>>> e53ab3a5be88548143a85298c51c07b167a8e9d3
    }

    public function profilesById()
    {
        return Auth::guard('employee')->user()->profiles()->pluck('name', 'employee_id');
    }
}