<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\googlemap;
use App\ContactUS;
class ContactUSController extends Controller
{
   public function contactUS()
    {
        
        

    

 $googlemap=googlemap::where('regioninfo_id',10)->get();


    return view('contactUs')->with ('googlemap' , $googlemap);
}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'message' => 'required'
        	]);

        ContactUS::create($request->all());

       
        return back()->with('success', 'Thanks for contacting us!');
    }
}
