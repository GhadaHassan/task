<?php

namespace App\Http\Controllers;

use App\msg;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function about(){
        return view('pages.about');
    }

    public function store(Request $request){
        // dd($request->name);

        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'msg' => 'required|max:1000',
        ]);

        $msg = new msg();
        $msg->name = $request->name;
        $msg->email = $request->email;
        $msg->msg = $request->msg;

        $msg->save();

        return redirect('/contact')->with('status','Msg Sended!');
        

    }
}
