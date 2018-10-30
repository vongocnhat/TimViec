<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\HomeRepositoryInterface;

class HomeController extends Controller
{
    // repository
    protected $re;

    public function __construct(HomeRepositoryInterface $re)
    {
        $this->re = $re;
    }

    public function home()
    {
        $re = $this->re;
        $jobsCount = $re->jobsCount();
        return view('home', compact('jobsCount'));
    }
}
