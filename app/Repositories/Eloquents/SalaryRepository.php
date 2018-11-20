<?php

namespace App\Repositories\Eloquents;

use App\Models\Salary;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\SalaryRepositoryInterface;

class SalaryRepository implements SalaryRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Salary::paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Salary::findOrFail($id);
    }

    public function store($request)
    {
        $salary = new Salary();
        $salary->name = $request->name;
        $salary->save();
    }

    public function update($request, $id)
    {
        $salary = Salary::findOrFail($id);
        $salary->name = $request->name;
        $salary->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Salary::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Salary::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}