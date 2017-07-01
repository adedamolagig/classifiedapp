<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        //$this->middleware = 'guest';
        return view('welcome', [
            'page_title'=>'Welcome to my website'
        ]);
    }

    public function about(){
        return view('about', [

        ]);
    }
}
