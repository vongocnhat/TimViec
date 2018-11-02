<?php

namespace App\Repositories\Eloquents\Home;

use App\Models\Employee;
use App\Repositories\Contracts\Home\ProfileHomeRepositoryInterface;

class ProfileHomeRepository implements ProfileHomeRepositoryInterface
{
    public function store($request)
    {
        $employee = new Employee();
        $employee->fill($request->except('password'));
        $employee->password = Hash::make($request->password);
        $employee->save();
    }
}