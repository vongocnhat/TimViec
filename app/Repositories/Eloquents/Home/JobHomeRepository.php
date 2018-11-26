<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Job;
use App\Models\Degree;
use App\Models\Office;
use App\Models\Salary;
use App\Models\Experience;
use App\Models\TypeOfWork;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Eloquents\Home\JobBaseRepository;
use App\Repositories\Contracts\Home\JobHomeRepositoryInterface;

class JobHomeRepository implements JobHomeRepositoryInterface
{
	public function paginate($numberRows)
    {
        $employer_id = Auth::guard('employer')->user()->id;
        return Job::where('employer_id', $employer_id)->paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Job::findOrFail($id);
    }

    public function store($request)
    {
        $job = new Job();
        $job->fill($request->except('employer_id'));
        $job->employer_id = Auth::guard('employer')->user()->id;
        $job->save();
    }

    public function update($request, $id)
    {
        $job = $this->findOrFail($id);
        $job->fill($request->except('employer_id'));
        $job->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Job::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Job::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }

    public function offices()
    {
        return Office::orderBy('id')->pluck('name', 'id')->sortKeys();
    }

    public function type_of_works()
    {
        return TypeOfWork::orderBy('id')->pluck('name', 'id')->sortKeys();
    }

    public function degrees()
    {
        return Degree::orderBy('id')->pluck('name', 'id')->sortKeys();
    }

    public function salaries()
    {
        return Salary::orderBy('id')->pluck('name', 'id')->sortKeys();
    }

    public function experiences()
    {
        return Experience::orderBy('id')->pluck('name', 'id')->sortKeys();
    }
}