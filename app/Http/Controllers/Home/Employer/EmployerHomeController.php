<?php

namespace App\Http\Controllers\Home\Employer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployerHomeController extends Controller
{
    public function signInView()
    {
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
        ], $remember) || Auth::guard('employer')->attempt([
            'phone' => $account,
            'password' => $password,
        ], $remember)) {
            return redirect()->route('employer-home.jobs.index');
        } else {
            return back()->withInput($request->all());
        }
    }

    public function signOut()
    {
        Auth::guard('employer')->logout();
        return back();
    }
}
