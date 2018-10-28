<?php

namespace App\Repositories\Eloquents;

use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\EmployeeRepositoryInterface;

class EmployeeRepository implements EmployeeRepositoryInterface
{
	public function paginate($numberRows)
    {
        return Employee::paginate($numberRows);
    }

    public function findOrFail($id)
    {
        return Employee::findOrFail($id);
    }

    public function store($request)
    {
        $employee = new Employee();
        $employee->fill($request->except('password'));
        $employee->password = Hash::make($request->password);
        $employee->save();
    }

    public function update($request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->fill($request->except('password'));
        if ($request->password)
            $employee->password = Hash::make($request->password);
        $employee->save();
    }

    public function destroy($request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = Employee::destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            $deleted = Employee::destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
    }
}