<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
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
        $projet = Portfolio::all();
        return view('pages.portfolio', compact('projet'));
    }
    public function contact(){
        return view('pages.contact');
    }
}
