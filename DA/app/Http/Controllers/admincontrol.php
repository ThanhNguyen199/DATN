<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontrol extends Controller
{
    public function login_admin(){
        return view('admin.login.login');
    }
    public function forgot_admin(){
        return view('admin.login.forgot_pass');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    
}
