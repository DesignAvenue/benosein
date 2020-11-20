<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function service(){
        return view('service');
    }
    public function bentows(){
        return view('bentows');
    }
    public function news(){
        return view('news');
    }

}
