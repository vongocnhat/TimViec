<?php

namespace App\Http\Controllers\Home\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Common\DestroyRequest;
use App\Http\Requests\Job\JobUpdateRequest;
use App\Http\Requests\Job\JobStoreRequest;
use App\Repositories\Contracts\Home\JobHomeRepositoryInterface;


class JobHomeController extends Controller
{
     protected $re;

    public function __construct(JobHomeRepositoryInterface $re)
    {
        $this->re = $re;
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = $this->re->paginate(10);
        return view('home.employer.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offices = $this->re->offices();
		$type_of_works = $this->re->type_of_works();
		$degrees = $this->re->degrees();
		$experiences = $this->re->experiences();
		$salaries = $this->re->salaries();
        return view('home.employer.job.create', compact('offices', 'type_of_works', 'degrees', 'experiences', 'salaries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobStoreRequest $request)
    {
        $this->re->store($request);
        $request->session()->flash('notify_success', __('common.create_success'));
        return redirect()->route('employer-home.job.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offices = $this->re->offices();
		$type_of_works = $this->re->type_of_works();
		$degrees = $this->re->degrees();
		$experiences = $this->re->experiences();
		$salaries = $this->re->salaries();
        $job = $this->re->findOrFail($id);
        return view('home.employer.job.edit', compact('job', 'offices', 'type_of_works', 'degrees', 'experiences', 'salaries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobUpdateRequest $request, $id)
    {
        $this->re->update($request, $id);
        $request->session()->flash('notify_success', __('common.update_success'));
        return redirect()->route('employer-home.job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request)
    {
        $this->re->destroy($request);
        return back();
    }
}
