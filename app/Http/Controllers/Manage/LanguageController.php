<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Common\DestroyRequest;
use App\Http\Requests\Language\LanguageUpdateRequest;
use App\Http\Requests\Language\LanguageStoreRequest;
use App\Repositories\Contracts\LanguageRepositoryInterface;

class LanguageController extends Controller
{
     protected $re;

    public function __construct(LanguageRepositoryInterface $re)
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
         $languages = $this->re->paginate(10);
        // dd($degrees);
        return view('manage.language.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('manage.language.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageStoreRequest $request)
    {
         $this->re->store($request);
        $request->session()->flash('notify_success', __('common.create_success'));
        return redirect()->route('language.index');
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
        $language = $this->re->findOrFail($id);
        return view('manage.language.edit', compact('language'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LanguageUpdateRequest $request, $id)
    {
         $this->re->update($request, $id);
        $request->session()->flash('notify_success', __('common.update_success'));
        return redirect()->route('language.index');
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
