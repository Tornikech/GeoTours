<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Regions;
use App\googlemap;


class RegioninfoController extends Controller
{
    public function regions($regionName) {

    	$regions=Regions::find($regionName);
    



 $googlemap=googlemap::where('regioninfo_id',$regionName)->get();




    	return view('regions')->with (['regions'=> $regions, 'googlemap' => $googlemap]);



    }
}
