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
        return $this->searchJobs($request, '`office_id` = 2');
    }
    
    public function specialize($request = null)
    {
        return $this->searchJobs($request, 'office_id = 1');
    }
    
    public function labor($request = null)
    {
        return $this->searchJobs($request, '`degree_id` <= 3');
    }

    public function student($request = null)
    {
        return $this->searchJobs($request, '`type_of_work_id` IN (3, 4)');
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

    private function searchJobs($request, $para_sql)
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
            $jobs = $jobs->whereRaw($sql . ' AND `status` = 1')->get();
        } else {
            $jobs = $jobs->whereRaw($para_sql . ' AND `status` = 1')->get();
        }
        return $jobs;
    }
}