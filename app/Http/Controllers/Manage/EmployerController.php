<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Common\DestroyRequest;
use App\Repositories\Contracts\EmployerRepositoryInterface;

class EmployerController extends Controller
{
    // repository
    protected $re;

    public function __construct(EmployerRepositoryInterface $re)
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
        $employers = $this->re->paginate(10);
        return view('manage.employer.index', compact('employers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request)
    {
        $deleted = 0;
        if ($request->delete_id) {
            // delete one
            $deleted = $this->re->destroy($request->delete_id);
            if ($deleted > 0) {
                session()->flash('notify_success', __('common.update_success'));
            } else {
                session()->flash('notify_error', __('common.update_fail'));
            }
        } else {
            // delete multiple
            $deleted = $this->re->destroy($request->ids);
            if ($deleted === count($request->ids)) {
                session()->flash('notify_success', __('common.update_success'));
            } else {
                session()->flash('notify_error', __('common.updates_fail'));
            }
        }
        return back();
    }
}
