<?php

namespace App\Http\Controllers\Home\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployerHomeController extends Controller
{
    public function signInView()
    {
        if (Auth::guard('employer')->check()) {
            return redirect()->route('employer-home.job.index');
        }
        return view('home.employer.sign_in');
    }

    public function signInCheck(Request $request)
    {
        $account = $request->account;
        $password = $request->password;
        $remember = false;
        if ($request->remember === '1') {
            $remember = true;
        }
        if (Auth::guard('employer')->attempt([
            'email' => $account,
            'password' => $password,
        ], $remember) 
        || Auth::guard('employer')->attempt([
            'phone' => $account,
            'password' => $password,
        ], $remember)) {
            if (Auth::guard('employee')->check()) {
                Auth::guard('employee')->logout();
            }
            return redirect()->route('employer-home.job.index');
        } else {
            session()->flash('notify_error', __('common.login_fail'));
            return back()->withInput($request->all());
        }
    }

    public function signOut()
    {
        Auth::guard('employer')->logout();
        return redirect()->route('home');
    }
}
