<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Regions;


class RegioninfoController extends Controller
{
    public function regions() {

    	$regions=Regions::all();

    	return view('about')->with ('regions', $regions);


    }
}