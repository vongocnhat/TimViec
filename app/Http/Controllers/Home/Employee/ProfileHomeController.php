<?php

namespace App\Http\Controllers\Home\Employee;

use PDF;
use App\Models\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Common\DestroyRequest;
use App\Http\Requests\Home\ProfileHomeStoreRequest;
use App\Repositories\Contracts\Home\ProfileHomeRepositoryInterface;

class ProfileHomeController extends Controller
{
    // repository
    private $re;

    public function __construct(ProfileHomeRepositoryInterface $re)
    {
         $this->re = $re;
    }

    public function profileToPDF($id, $template)
    {
        $profile = $this->re->findOrFail($id);
        $pdf = PDF::loadView('home.employee.profile.pdf.' . $template, compact('profile'))
        ->setPaper('a4')
        ->setOption('margin-top', 0)
        ->setOption('margin-bottom', 0)
        ->setOption('margin-left', 0)
        ->setOption('margin-right', 0);
        return $pdf->inline();
    }

    public function profile($id)
    {
        $profile = $this->re->findOrFail($id);
        return view('home.employee.profile.pdf.template1', compact('profile'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = Storage::disk('profile_templates')->files('pdf');
        $templates = array_map(function($profile) {
            $firstName = substr($profile, 4);
            $name = substr($firstName, 0, strlen($firstName) - 10);
            return $name;
        }, $templates);
        $profiles = $this->re->paginate(10);
        return view('home.employee.profile.index', compact('profiles', 'templates'));
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
        $offices = $this->re->offices();
        $experiences = $this->re->experiences();
        $provinces = $this->re->provinces();
        $months = Common::months();
        $years = Common::years();
        $currencies = Common::currencies();
        $graduates = $this->re->graduates();
        $languages = $this->re->languages();
        return view('home.employee.profile.create', compact(
        'careers',
        'degrees',
        'typeOfWorks',
        'offices',
        'experiences',
        'provinces',
        'months',
        'years',
        'currencies',
        'graduates',
        'languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(json_decode($request->profileData, true), [
            'name' => 'required|max:191',
            'career_id' => 'required|numeric|max:10',
            'degree_id' => 'required|numeric|max:10',
            'type_of_work_id' => 'required|numeric|max:10',
            'experience_id' => 'required|numeric|max:10',
            'office_id' => 'required|numeric|max:10',
            'desired_job' => 'max:255',
            'desire_minimum_wage' => 'required|numeric|max:4294967295',
            'currency' => 'max:255',
            'career_goals' => 'max:255',
            'word' => 'required|numeric|max:4',
            'excel' => 'required|numeric|max:4',
            'power_point' => 'required|numeric|max:4',
        ]);
        if ($validator->fails()) {
            return json_encode($validator->errors()->getMessages());
        } else {
            $this->re->store($request);
            session()->flash('notify_success', __('common.create_success'));
            return route('employeeHome.profile.index');
        }
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
        $careers = $this->re->careers();
        $degrees = $this->re->degrees();
        $typeOfWorks = $this->re->typeOfWorks();
        $offices = $this->re->offices();
        $experiences = $this->re->experiences();
        $provinces = $this->re->provinces();
        $months = Common::months();
        $years = Common::years();
        $currencies = Common::currencies();
        $graduates = $this->re->graduates();
        $languages = $this->re->languages();
        return view('home.employee.profile.edit', compact(
        'profile',
        'careers',
        'degrees',
        'typeOfWorks',
        'offices',
        'experiences',
        'provinces',
        'months',
        'years',
        'currencies',
        'graduates',
        'languages'));
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
        $validator = Validator::make(json_decode($request->profileData, true), [
            'name' => 'required|max:191',
            'career_id' => 'required|numeric|max:10',
            'degree_id' => 'required|numeric|max:10',
            'type_of_work_id' => 'required|numeric|max:10',
            'experience_id' => 'required|numeric|max:10',
            'office_id' => 'required|numeric|max:10',
            'desired_job' => 'max:255',
            'desire_minimum_wage' => 'required|numeric|max:4294967295',
            'currency' => 'max:255',
            'career_goals' => 'max:255',
            'word' => 'required|numeric|max:4',
            'excel' => 'required|numeric|max:4',
            'power_point' => 'required|numeric|max:4',
        ]);
        if ($validator->fails()) {
            return json_encode($validator->errors()->getMessages());
        } else {
            $this->re->update($request, $id);
            session()->flash('notify_success', __('common.update_success'));
            return route('employeeHome.profile.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request)
    {
        $this->re->destroy($request);
        return back();
    }
}
