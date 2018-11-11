<?php

namespace App\Http\Controllers\Home\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Home\ProfileHomeRepositoryInterface;

class ProfileSubmittedHomeController extends Controller
{
     // repository
     private $re;

     public function __construct(ProfileHomeRepositoryInterface $re)
     {
         $this->re = $re;
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = $this->re->paginate(10);
        return view('home.employee.profile_submitted.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $careers = $this->re->careers();
        $degrees = $this->re->degrees();
        $typeOfWorks = $this->re->typeOfWorks();
        return view('home.employee.profile_submitted.create', compact('careers', 'degrees', 'typeOfWorks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->re->store($request);
        return redirect()->route('employeeHome.profile-submitted.index');
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
        $profile = $this->re->findOrFail($id);
        return view('home.employee.profile_submitted.edit', compact('profile'));
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
        //
        $this->re->update($request, $id);
        $request->session()->flash('notify_success', __('common.update_success'));
        return redirect()->route('employeeHome.profile-submitted.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->re->destroy($request);
        return back();
    }
}
