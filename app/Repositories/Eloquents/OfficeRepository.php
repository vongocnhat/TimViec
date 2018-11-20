<?php

namespace App\Repositories\Eloquents;

use App\Models\Office;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\OfficeRepositoryInterface;

class OfficeRepository implements OfficeRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Office::paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Office::findOrFail($id);
    }

    public function store($request)
    {
        $office = new Office();
        $office->name = $request->name;
        $office->save();
    }

    public function update($request, $id)
    {
        $office = Office::findOrFail($id);
        $office->name = $request->name;
        $office->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Office::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Office::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}