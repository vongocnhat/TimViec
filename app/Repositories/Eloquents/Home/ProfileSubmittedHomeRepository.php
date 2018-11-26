<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Profile;
use App\Models\Employee;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\Contracts\Home\ProfileSubmittedHomeRepositoryInterface;

class ProfileSubmittedHomeRepository implements ProfileSubmittedHomeRepositoryInterface
{
    public function paginate($numberRows)
    {
        $jobs = [];
        foreach(Auth::guard('employee')->user()->profiles->all() as $profile) {
            $jobs[$profile->name] = $profile->jobs;
        }
        return $jobs;
    }

    public function destroy($request)
    {
        
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Profile::where('name' , $request->profileName)->firstOrFail()->jobs()->detach($request->job_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Profile::where('name' , $request->profile_name)->firstOrFail()->jobs()->detach($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
        return back();
    }
}