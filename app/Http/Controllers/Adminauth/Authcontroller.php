<?php

namespace App\Http\Controllers\Adminauth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class Authcontroller extends Controller
{
   
    protected $redirectTo = '/admin';
    protected $guard='admin';
    public function showLoginForm()
    {

        if(Auth::guard('admin')->check())
        {
            return redirect('admin/login');
        }
        return view ('login');
    }
    public function logout()
    {
        Auth::guard('admin')-> logout();
        return redirect('/');
    }
}
