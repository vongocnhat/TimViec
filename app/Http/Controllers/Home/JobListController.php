<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Home\JobListRepositoryInterface;

class JobListController extends Controller
{
    // repository
    private $re;

    public function __construct(JobListRepositoryInterface $re)
    {
        $this->re = $re;
    }

    private function jobList($jobType, $jobs, $jobTitle, $backgroundColor = null, $color = null)
    {
        $re = $this->re;
        $careers = $re->careers();
        $salaries = $re->salaries();
        $experiences = $re->experiences();
        $provinces = $re->provinces();
        return view('home.job_list', compact('jobType', 'careers', 'salaries', 'experiences', 'provinces', 'jobs', 'jobTitle', 'backgroundColor', 'color'));
    }

    public function manager()
    {
        $re = $this->re;
        $managers = $re->manager(null, 10);
        return $this->jobList('manager', $managers, __('job_list.text25', ['para1' => __('job_list.text3')]), ' manager-background', ' manager-color');
    }

    public function specialize()
    {
        $re = $this->re;
        $specializes = $re->specialize(null, 10);
        return $this->jobList('specialize', $specializes, __('job_list.text25', ['para1' => __('job_list.text5')]), ' specialize-background', ' specialize-color');
    }

    public function labor()
    {
        $re = $this->re;
        $labors = $re->labor(null, 10);
        return $this->jobList('labor', $labors, __('job_list.text25', ['para1' => __('job_list.text7')]), ' labor-background', ' labor-color');
    }

    public function student()
    {
        $re = $this->re;
        $students = $re->student(null, 10);
        return $this->jobList('student', $students, __('job_list.text25', ['para1' => __('job_list.text9')]), ' student-background', ' student-color');
    }

    public function searchAjax(Request $request)
    {
        $jobs = $this->re->jobsById($request);
        $jobType = $request->jobType;
        return view('home.ajaxs.jobs_by_id', compact('jobs', 'jobType'));
    }
}
