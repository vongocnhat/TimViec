<?php

namespace App\Repositories\Eloquents;

use App\Models\Experience;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\ExperienceRepositoryInterface;

class ExperienceRepository implements ExperienceRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Experience::paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Experience::findOrFail($id);
    }

    public function store($request)
    {
        $experience = new Experience();
        $experience->name = $request->name;
        $experience->save();
    }

    public function update($request, $id)
    {
        $experience = Experience::findOrFail($id);
        $experience->name = $request->name;
        $experience->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Experience::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Experience::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}