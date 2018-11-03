<?php

namespace App\Http\Controllers\Home;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Home\JobDetailRepositoryInterface;

class JobDetailController extends Controller
{
    private $re;

    public function __construct(JobDetailRepositoryInterface $re)
    {
        $this->re = $re;
    }

    public function show($id)
    {
        $careers = $this->re->careers();
        $salaries = $this->re->salaries();
        $experiences = $this->re->experiences();
        $provinces = $this->re->provinces();
        $job = $this->re->job($id);
        return view('home.job_detail', compact('careers', 'salaries', 'experiences', 'provinces', 'job'));
    }

    public function profilesSelect(Request $request)
    {
        if($request->ajax()) {
            $profilesById = $this->re->profilesById();
            $job_id = $request->job_id;
            return view('home.ajaxs.profiles_select', compact('profilesById', 'job_id'));
        }
    }

    public function storeSendProfileToEmployer(Request $request)
    {
        try {
            $job_id = $request->job_id;
            $profile_id = $request->profile_id;
            $job = $this->re->job($job_id);
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
