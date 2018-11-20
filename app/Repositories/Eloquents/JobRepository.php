<?php

namespace App\Repositories\Eloquents;

use App\Models\Job;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\JobRepositoryInterface;

class JobRepository implements JobRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Job::with('employer','salary:id,name')->paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Job::findOrFail($id);
    }

    public function store($request)
    {
        
    }

    public function update($request, $id)
    {
        
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
}