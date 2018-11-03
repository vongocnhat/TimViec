<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Job;
use App\Models\Career;
use App\Models\Salary;
use App\Models\Profile;
use App\Models\Province;
use App\Models\Experience;

abstract class JobBaseRepository
{
    public function careers()
    {
        return Career::pluck('name', 'id');
    }

    public function salaries()
    {
        return Salary::pluck('name', 'id')->sortKeys();
    }

    public function experiences()
    {
        return Experience::pluck('name', 'id')->sortKeys();
    }

    public function provinces()
    {
        return Province::pluck('name', 'id');
    }

    public function manager($request = null)
    {
        $jobs = null;
        if (!(empty($request->career_id)
            && empty($request->salary_id)
            && empty($request->experience_id)
            && empty($request->province_id))) {
            $career_id = $request->career_id;
            $salary_id = $request->salary_id;
            $experience_id = $request->experience_id;
            $province_id = $request->province_id;
            $sql = 'office_id = 2';
            if (!empty($career_id)) {
                $sql .= " AND career_ids LIKE '%" . $career_id . ",%'";
            }
            if (!empty($salary_id)) {
                $sql .= ' AND salary_id = ' . $salary_id;
            }
            if (!empty($experience_id)) {
                $sql .= ' AND experience_id = ' . $experience_id;
            }
            if (!empty($province_id)) {
                $sql .= " AND province_ids LIKE '%" . $province_id . ",%'";
            }
            $jobs = Job::whereRaw($sql)->get();
        } else {
            $jobs = Job::where('office_id', 2)->get();
        }
        return $jobs;
    }
    
    public function specialize($request = null)
    {
        return Job::whereRaw('LENGTH(career_ids) > 0 AND office_id = 1')->get();
    }
    
    public function labor($request = null)
    {
        return Job::where('degree_id', '<=', 3)->get();
    }

    public function student($request = null)
    {
        return Job::whereRaw('type_of_work_id IN (3, 4)')->get();
    }

    public function jobsById($request)
    {
        $url = url()->previous();
        switch ($url)
        {
            case route('jobList.manager'):
                return $this->manager($request);
            break;
            case route('jobList.specialize'):
                return $this->specialize($request);
            break;
            case route('jobList.labor'):
                return $this->labor($request);
            break;
            case route('jobList.student'):
                return $this->student($request);
            break;
        }
    }
}