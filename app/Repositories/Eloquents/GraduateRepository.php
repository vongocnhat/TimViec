<?php

namespace App\Repositories\Eloquents;

use App\Models\Graduate;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\GraduateRepositoryInterface;

class GraduateRepository implements GraduateRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Graduate::paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Graduate::findOrFail($id);
    }

    public function store($request)
    {
        $graduate = new Graduate();
        $graduate->name = $request->name;
        $graduate->save();
    }

    public function update($request, $id)
    {
        $graduate = Graduate::findOrFail($id);
        $graduate->name = $request->name;
        $graduate->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Graduate::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Graduate::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}