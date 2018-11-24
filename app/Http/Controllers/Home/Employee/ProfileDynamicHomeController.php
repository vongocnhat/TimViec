<?php

namespace App\Http\Controllers\Home\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Common\DestroyRequest;
use Barryvdh\Snappy\Facades\SnappyPdf AS PDF;

class ProfileDynamicHomeController extends Controller
{
    public function toPDF($name)
    {
        $fullName = Auth::guard('employee')->user()->id . '.' . $name;
        $pdf = PDF::loadView('home.employee.profile.dynamic.' . $fullName)
        ->setPaper('a4')
        ->setOption('margin-top', 0)
        ->setOption('margin-bottom', 0)
        ->setOption('margin-left', 0)
        ->setOption('margin-right', 0);
        return $pdf->inline();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $path = Auth::guard('employee')->user()->id;
        $profiles = Storage::disk('dynamic_profile')->files($path);
        $profiles = array_map(function($profile) use ($path) {
            $firstName = substr($profile, strlen($path) + 1);
            $name = substr($firstName, 0, strlen($firstName) - 10);
            return $name;
        }, $profiles);
        $profiles = array_reverse($profiles);
        return view('home.employee.profile.dynamic.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->name) {
            $path = Auth::guard('employee')->user()->id . '.' . $request->name;
            $html = View::make('home.employee.profile.dynamic.' . $path);
            $html = str_replace('<textarea-to-text', '<textarea', $html);
            $html = str_replace('</textarea-to-text>', '</textarea>', $html);
            return response($html);
        } else {
            return view('home.employee.profile.dynamic.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = preg_replace("/[^\da-z]/i", "", $request->name);
        $name = Auth::guard('employee')->user()->id . '/' . $name . '.blade.php';
        Storage::disk('dynamic_profile')->put($name, $request->html);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        // $name = preg_replace("/[^\da-z]/i", "", $id);
        // $name = Auth::guard('employee')->user()->id . '/' . $name . '.blade.php';
        // Storage::disk('dynamic_profile')->put($name, $request->html);
        // return redirect()->route('employeeHome.profile-dynamic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, $id)
    {
        $name = $request->delete_id;
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $name = Auth::guard('employee')->user()->id . '/' . $name . '.blade.php';
            Storage::disk('dynamic_profile')->delete($name);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.delete_fail'));
            }
        } else {
            // delete multiple
            
            foreach ($request->ids as $name) {
                $name = Auth::guard('employee')->user()->id . '/' . $name . '.blade.php';
                Storage::disk('dynamic_profile')->delete($name);
            }
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.delete_success'));
            } else {
                session()->flash('notify_error', __('common.deletes_fail'));
            }
        }
        return back();
    }
}
