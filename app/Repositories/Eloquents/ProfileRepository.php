<?php

namespace App\Repositories\Eloquents;

use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\ProfileRepositoryInterface;

class ProfileRepository implements ProfileRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Profile::with('employee','career:id,name')->paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Profile::findOrFail($id);
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
}