<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Home\HomeRepositoryInterface;

class HomeController extends Controller
{
    // repository
    private $re;

    public function __construct(HomeRepositoryInterface $re)
    {
        $this->re = $re;
    }

    public function index()
    {
        $re = $this->re;
        $jobsReady = $re->jobsReady();
        $profilesReady = $re->profilesReady();

        return view('home.home', compact('jobsReady', 'profilesReady'));
    }
}
