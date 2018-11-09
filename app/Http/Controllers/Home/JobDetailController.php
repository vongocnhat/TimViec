<?php

namespace App\Http\Controllers\Home;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Repositories\Contracts\Home\JobDetailRepositoryInterface;

class JobDetailController extends Controller
{
    private $re;

    public function __construct(JobDetailRepositoryInterface $re)
    {
        $this->re = $re;
    }

    public function show($jobID, $backgroundColor, $color)
    {
        $careers = $this->re->careers();
        $salaries = $this->re->salaries();
        $experiences = $this->re->experiences();
        $provinces = $this->re->provinces();
        $job = $this->re->job($jobID);
        return view('home.job_detail', compact('careers', 'salaries', 'experiences', 'provinces', 'job', 'backgroundColor', 'color'));
    }

    public function profilesSelect(Request $request)
    {
        if($request->ajax()) {
            $profilesById = $this->re->profilesById();
            $jobID = $request->jobID;
            return view('home.ajaxs.profiles_select', compact('profilesById', 'jobID'));
        }
    }

    public function storeSendProfileToEmployer(Request $request)
    {
        try {
            $jobID = $request->jobID;
            $profile_id = $request->profile_id;
            $job = $this->re->job($jobID);
            $job->profiles()->attach($profile_id);
        } catch(Exception $e) {
            if (strpos($e->getMessage(), 'Duplicate entry')) {
                echo __('job_detail.profile_duplicate');
            } else {
                echo __('common.error');
            }
        }
    }
}
