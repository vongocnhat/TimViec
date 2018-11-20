<?php

namespace App\Repositories\Eloquents;

use App\Models\Career;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\CareerRepositoryInterface;

class CareerRepository implements CareerRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Career::paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Career::findOrFail($id);
    }

    public function store($request)
    {
        $career = new Career();
        $career->name = $request->name;
        $career->save();
    }

    public function update($request, $id)
    {
        $career = Career::findOrFail($id);
        $career->name = $request->name;
        $career->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Career::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Career::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}