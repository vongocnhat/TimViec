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
        return Career::orderBy('id')->pluck('name', 'id');
    }

    public function salaries()
    {
        return Salary::orderBy('id')->pluck('name', 'id')->sortKeys();
    }

    public function experiences()
    {
        return Experience::orderBy('id')->pluck('name', 'id')->sortKeys();
    }

    public function provinces()
    {
        return Province::orderBy('id')->pluck('name', 'id');
    }

    public function jobsById($request)
    {
        $url = url()->previous();
        switch ($url)
        {
            case route('jobList.manager'):
                return $this->manager($request, 10);
            break;
            case route('jobList.specialize'):
                return $this->specialize($request, 10);
            break;
            case route('jobList.labor'):
                return $this->labor($request, 10);
            break;
            case route('jobList.student'):
                return $this->student($request, 10);
            break;
        }
    }

    public function searchJobs($request, $para_sql, $numberPage = 10)
    {
        $jobs = Job::with('provinces', 'salary', 'employer');
        if (!(empty($request->career_id)
            && empty($request->salary_id)
            && empty($request->experience_id)
            && empty($request->province_id)
            && empty($request->inp_search))) {
            $career_id = $request->career_id;
            $salary_id = $request->salary_id;
            $experience_id = $request->experience_id;
            $province_id = $request->province_id;
            $inp_search = $request->inp_search;
            $sql = $para_sql;
            if (!empty($inp_search)) {
                $sql .= " AND `name` LIKE '%" . $inp_search . "%'";
            }
            if (!empty($salary_id)) {
                $sql .= ' AND `salary_id` = ' . $salary_id;
            }
            if (!empty($experience_id)) {
                $sql .= ' AND `experience_id` = ' . $experience_id;
            }
            if (!empty($career_id)) {
                $jobs = $jobs->whereHas('careers', function($query) use ($career_id) {
                    $query->where('career_id', $career_id);
                });
            }
            if (!empty($province_id)) {
                $jobs = $jobs->whereHas('provinces', function($query) use ($province_id) {
                    $query->where('province_id', $province_id);
                });
            }
            $jobs = $jobs->whereRaw($sql . ' AND `status` = 1')->paginate($numberPage);
        } else {
            $jobs = $jobs->whereRaw($para_sql . ' AND `status` = 1')->paginate($numberPage);
        }
        return $jobs;
    }
}