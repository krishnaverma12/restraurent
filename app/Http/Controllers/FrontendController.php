<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
    public function chef(){
        return view('chef');
    }
    public function menu(){
        return view('menu');
    }
    public function gallery(){
        return view('gallery');
    }
}
