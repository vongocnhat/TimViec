<?php

namespace App\Repositories\Eloquents;

use App\Models\Degree;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\DegreeRepositoryInterface;

class DegreeRepository implements DegreeRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Degree::paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Degree::findOrFail($id);
    }

    public function store($request)
    {
        $degree = new Degree();
        $degree->name = $request->name;
        $degree->save();
    }

    public function update($request, $id)
    {
        $degree = Degree::findOrFail($id);
        $degree->name = $request->name;
        $degree->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Degree::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Degree::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}