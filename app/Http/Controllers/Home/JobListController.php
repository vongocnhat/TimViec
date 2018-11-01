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

    private function jobList($jobs)
    {
        $re = $this->re;
        $careers = $re->careers();
        $salaries = $re->salaries();
        $experiences = $re->experiences();
        $provinces = $re->provinces();
        return view('home.job_list', compact('careers', 'salaries', 'experiences', 'provinces', 'jobs'));
    }

    public function manager()
    {
        $re = $this->re;
        $managers = $re->manager();
        return $this->jobList($managers);
    }

    public function specialize()
    {
        $re = $this->re;
        $specializes = $re->specialize();
        return $this->jobList($specializes);
    }

    public function labor()
    {
        $re = $this->re;
        $labors = $re->labor();
        return $this->jobList($labors);
    }

    public function student()
    {
        $re = $this->re;
        $students = $re->student();
        return $this->jobList($students);
    }

    public function searchAjax()
    {
        echo 's';
    }
}
