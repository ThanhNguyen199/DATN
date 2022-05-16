<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontrol extends Controller
{
    public function home_page(){
        return view('user.home');
    }
    public function shop_page(){
        return view('user.shop');
    }
    public function about_page(){
        return view('user.about');
    }
    public function blog_page(){
        return view('user.blog');
    }
    public function faq_page(){
        return view('user.faq');
    }
    public function contact_page(){
        return view('user.contact');
    }
}
