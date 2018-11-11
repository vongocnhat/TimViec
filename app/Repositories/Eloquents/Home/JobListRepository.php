<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Job;
use App\Models\Career;
use App\Models\Profile;
use App\Models\Province;
use App\Repositories\Eloquents\Home\JobBaseRepository;
use App\Repositories\Contracts\Home\JobListRepositoryInterface;

class JobListRepository extends JobBaseRepository implements JobListRepositoryInterface
{
    public function manager($request = null, $numberPage)
    {
        return $this->searchJobs($request, '`office_id` IN (4, 5, 6)', $numberPage);
    }
    
    public function specialize($request = null, $numberPage)
    {
        return $this->searchJobs($request, 'office_id IN (1, 2, 3)', $numberPage);
    }
    
    public function labor($request = null, $numberPage)
    {
        return $this->searchJobs($request, '`degree_id` <= 3', $numberPage);
    }

    public function student($request = null, $numberPage)
    {
        return $this->searchJobs($request, '`type_of_work_id` IN (3, 4)', $numberPage);
    }
}