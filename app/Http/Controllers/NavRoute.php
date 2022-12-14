<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Blog;
use Illuminate\Http\Request;

class NavRoute extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function blog(){
        $blog = Blog::all()->random(4);
        return view('pages.blog', compact("blog"));
    }
    public function portfolio(){
        $projet = Portfolio::all()->random(15);
        return view('pages.portfolio', compact('projet'));
    }
    public function contact(){
        return view('pages.contact');
    }
    public function admin(){
        return view('pages.adminPerm');
    }
}
