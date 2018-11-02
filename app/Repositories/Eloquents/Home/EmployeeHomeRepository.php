<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Ward;
use App\Models\District;
use App\Models\Employee;
use App\Models\Province;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Contracts\Home\EmployeeHomeRepositoryInterface;

class EmployeeHomeRepository extends JobBaseRepository  implements EmployeeHomeRepositoryInterface
{
    public function store($request)
    {
        $employee = new Employee();
        $employee->fill($request->except('password'));
        $employee->password = Hash::make($request->password);
        $employee->save();
    }

    public function employee()
    {
        $id = Auth::guard('employee')->user()->id;
        return Employee::findOrFail($id);
    }

    public function update($request)
    {
        $employee = Auth::guard('employee')->user();
        $employee->fill($request->except('password'));
        if ($request->password)
            $employee->password = Hash::make($request->password);
        $employee->save();
    }

    public function provinces()
    {
        return Province::pluck('name', 'id');
    }

    public function districts()
    {
        return District::pluck('name', 'id');
    }

    public function wards()
    {
        return Ward::pluck('name', 'id');
    }
}