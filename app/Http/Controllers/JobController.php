<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class JobController extends BaseController
{
    function getPublicJobs(){
        $navList = [];
        $jobs = DB::select('SELECT * FROM job');
        $navs = DB::select('SELECT * FROM navigation');

        return view('jobListing', ['jobs'=> $jobs, 'navs' => $navs]);
    }
}
