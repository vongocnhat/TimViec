<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Career;
use App\Models\Degree;
use App\Models\Office;
use App\Models\Profile;
use App\Models\Province;
use App\Models\Experience;
use App\Models\TypeOfWork;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Repositories\Contracts\Home\ProfileHomeRepositoryInterface;

class ProfileHomeRepository implements ProfileHomeRepositoryInterface, BaseRepositoryInterface
{
    public function paginate($numberRows)
    {
        return Profile::where('employee_id', Auth::guard('employee')->user()->id)->paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Profile::findOrFail($id);
    }

    public function store($request)
    {
        $profile = new Profile();
        $profile->employee_id = Auth::guard('employee')->user()->id;
        $profile->fill($request->except('profile_img'));
        $profile->profile_img = 'ten anh';
        $profile->save();
        $profile->provinces()->attach($request->provinces_id);        
    }

    public function update($request, $id)
    {
        $profile = $this->findOrFail($id);
        $profile->fill($request->all());
        $profile->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Profile::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Profile::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }

    public function careers()
    {
        return Career::orderBy('id')->pluck('name', 'id');
    }

    public function degrees()
    {
        return Degree::orderBy('id')->pluck('name', 'id');
    }

    public function typeOfWorks()
    {
        return TypeOfWork::orderBy('id')->pluck('name', 'id');
    }

    public function offices()
    {
        return Office::orderBy('id')->pluck('name', 'id');
    }

    public function experiences()
    {
        return Experience::orderBy('id')->pluck('name', 'id');
    }

    public function provinces()
    {
        return Province::orderBy('id')->pluck('name', 'id');
    }
}