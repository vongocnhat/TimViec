<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\EmployerRepositoryInterface;
use App\Models\Employer;

class EmployerRepository implements EmployerRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Employer::paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Employer::findOrFail($id);
    }

    public function store($request)
    {
        $employer = new Employer();
        $employer->fill($request->except('password'));
        $employer->password = Hash::make($request->password);
        $employer->save();
    }

    public function update($request, $id)
    {
        $employer = Employer::findOrFail($id);
        $employer->fill($request->except('password'));
        if ($request->password)
            $employer->password = Hash::make($request->password);
        $employer->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Employer::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Employer::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}