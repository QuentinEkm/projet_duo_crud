<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavRoute extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function portfolio(){
        return view('pages.portfolio');
    }
    public function contact(){
        return view('pages.contact');
    }
}