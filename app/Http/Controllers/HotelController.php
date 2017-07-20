<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('show', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validating the users input
       $this->validate(request(), [
            
            'hotelname' => 'required|unique:hotels|min:5',
            'state' => 'required',
            'phonenumber' => 'min:11',
            'image' => 'required | mimes:jpeg,jpg,png | max:1000',
            
           ]);
        
        //saving to database
        $aHotel = Hotel::create(request(['hotelname', 'state', 'phonenumber']));
        if ($request->hasFile('image')){
            Storage::putFileAs(
                'public', $request->file('image'), $aHotel->id.'.jpg'
            );
            // $request->file('image');
            // $request->image->store('public');
        }
        else {
            return "No_file_selected";
        }
        
         //session()->flash('message', 'A new Hotel was successfully saved!');
         
        
        //redirect to create room page
        
        return back()->with('message', 'A new Hotel was successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        
        return view('gallery', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
