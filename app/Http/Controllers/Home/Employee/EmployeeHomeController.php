<?php

namespace App\Http\Controllers\Home\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Employer\EmployeeUpdateRequest;
use App\Repositories\Contracts\Home\EmployeeHomeRepositoryInterface;

class EmployeeHomeController extends Controller
{
    // repository
    private $re;

    public function __construct(EmployeeHomeRepositoryInterface $re)
    {
        $this->re = $re;
    }

    public function create()
    {
        $provinces = $this->re->provinces();
        $districts = $this->re->districts();
        $wards = $this->re->wards();
        return view('home.employee.create', compact('provinces', 'districts', 'wards'));
    }

    public function store(Request $request)
    {
        $this->re->store($request);
        return redirect()->route('home');
    }

    public function edit()
    {
        $employee = $this->re->employee();
        $provinces = $this->re->provinces();
        $districts = $this->re->districts();
        $wards = $this->re->wards();

        $careers = $this->re->careers();
        $salaries = $this->re->salaries();
        $experiences = $this->re->experiences();
        return view('home.employee.edit', compact('employee', 'provinces', 'districts', 'wards', 'careers', 'salaries', 'experiences'));
    }

    public function update(EmployeeUpdateRequest $request)
    {
        $this->re->update($request);
        $request->session()->flash('notify_success', __('common.update_success'));
        return back();
    }

    public function signInView()
    {
        $urlPrevious = url()->previous();
        if (Auth::guard('employee')->check()) {
            return redirect()->route('home');
        }
        return view('home.employee.sign_in', compact('urlPrevious'));
    }

    public function signInCheck(Request $request)
    {
        $account = $request->account;
        $password = $request->password;
        $remember = false;
        $urlPrevious = $request->urlPrevious;
        if ($request->remember === '1') {
            $remember = true;
        }
        if (Auth::guard('employee')->attempt([
            'email' => $account,
            'password' => $password,
        ], $remember) || Auth::guard('employee')->attempt([
            'phone' => $account,
            'password' => $password,
        ], $remember)) {
            if (Auth::guard('employer')->check()) {
                Auth::guard('employer')->logout();
            }
            return redirect($urlPrevious);
        } else {
            session()->flash('notify_error', __('common.login_fail'));
            return back()->withInput($request->all());
        }
    }

    public function signOut()
    {
        Auth::guard('employee')->logout();
        return back();
    }
}
