<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class NavRoute extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function blog(){
        $blog = Blog::all();
        return view('pages.blog', compact("blog"));
    }
    public function portfolio(){
        return view('pages.portfolio');
    }
    public function contact(){
        return view('pages.contact');
    }
}
