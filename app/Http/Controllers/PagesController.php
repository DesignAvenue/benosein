<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use Session;
use App\Models\ourwork;

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

    public function team(){
        return view('team');
    }

    public function mail(Request $request){

        $data = $request->validate([
            "message"=>"required|string",
            "subject"=>"required|string",
            "name"=>"required|string",
            "email"=>"required|email",
            "phone"=>"required|string"
        ]);

        Mail::to('sales@designave.co.zw')->send(new ContactMail($data));

        Session::put('message', "Your message has been sent successfully");

        return redirect()->back();
    }

    public function ourwork(){
        $work =ourwork::all();
        return view('ourwork')
        ->with('work',$work);
    }

}
