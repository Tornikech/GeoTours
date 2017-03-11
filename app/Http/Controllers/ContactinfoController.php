<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\contacts;


class ContactinfoController extends Controller
{
    public function contacts() {

    	$contacts=contacts::all();

    	return view('contact')->with ('contacts', $contacts);


    }
}
