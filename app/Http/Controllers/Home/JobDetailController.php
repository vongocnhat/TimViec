<?php

namespace App\Http\Controllers\Home;

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
        $re = $this->re;
        $careers = $re->careers();
        $salaries = $re->salaries();
        $experiences = $re->experiences();
        $provinces = $re->provinces();
        $job = $this->re->job($id);
        return view('home.job_detail', compact('careers', 'salaries', 'experiences', 'provinces', 'job'));
    }

    public function profilesSelect()
    {
        $profiles = $this->re->profiles();
        return view('home.ajaxs.profiles_select', compact('profiles'));
    }

    public function sendProfileToEmployer(Request $request)
    {
        $job_id = $request->job_id;
        $profile_id = $request->profile_id;
        $job = $this->re->findOrFail($job_id);
        $job->profiles()->attach($profile_id);
    }
}
