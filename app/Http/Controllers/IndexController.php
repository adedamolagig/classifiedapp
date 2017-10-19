<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    //
    public function index(){
        //$this->middleware = 'guest';
        return view('welcome', [
            'page_title'=>'Classified Home App'
        ]);
    }

  

    public function gallery()
    {
        
    }
    
     public function yourTrips()
    {
        return view('user.yourTrips', [
            
            ]);
    }
    
    public function profile()
    {
        return view('user.profile', [
            
            ]);
    }
    
    public function yourEvents()
    {
        return view('user.yourEvents', [
            
            ]);
    }
    
    public function CreateRooms()
    {
        return view('admin.create');
    }
    
    public function create()
    {
        flash()->success('Welcome to create a Home', 'You can create a home for somebody');
        return view('hotel');
    }
    
    
    
}
