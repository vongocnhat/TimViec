<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Home\ProfileHomeRepositoryInterface;

class ProfileHomeController extends Controller
{
    // repository
    private $re;

    public function __construct(ProfileHomeRepositoryInterface $re)
    {
        $this->re = $re;
    }

    // public function create()
    // {
    //     return view();
    // }

    // public function store(Request $request)
    // {
    //     return ();
    // }

    // public function edit()
    // {
    //     return view();
    // }

    // public function update()
    // {
    //     return ;
    // }
}
