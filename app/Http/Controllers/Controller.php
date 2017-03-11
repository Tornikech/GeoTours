<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use app\Regions;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 function insert(Request $req){

    	$regionName =$req->input('regionName');
    	$regionCity = $req->input('regionCity');
    	$aboutTours = $req->input('aboutTours');
    	$aboutPlace =$req->input('aboutPlace');

    	$data =array('regionName'=>$regionName,"regionCity"=>$regionCity, "aboutTours"=>$aboutTours,"aboutPlace"=>$aboutPlace);

    	DB::table('regionInfo')->insert($data);
    	echo "success";
    }




    function getData()
    {
    	$data['data'] = DB::table('regionInfo')->get();
    	if (count($data) > 0)
    	{

    		return view('insertForm', $data);
    	}
    	else
    	{
    		return view ('insertForm');
    	}
    }

}
