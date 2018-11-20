<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Common\DestroyRequest;
use App\Http\Requests\Graduate\GraduateUpdateRequest;
use App\Http\Requests\Graduate\GraduateStoreRequest;
use App\Repositories\Contracts\GraduateRepositoryInterface;

class GraduateController extends Controller
{
     protected $re;

    public function __construct(GraduateRepositoryInterface $re)
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
        $graduates = $this->re->paginate(10);
        // dd($graduates);
        return view('manage.graduate.index', compact('graduates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.graduate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GraduateStoreRequest $request)
    {
        // dd($request);
        $this->re->store($request);
        $request->session()->flash('notify_success', __('common.create_success'));
        return redirect()->route('graduate.index');
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
        $graduate = $this->re->findOrFail($id);
        return view('manage.graduate.edit', compact('graduate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GraduateUpdateRequest $request, $id)
    {
        $this->re->update($request, $id);
        $request->session()->flash('notify_success', __('common.update_success'));
        return redirect()->route('graduate.index');
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
