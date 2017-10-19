<?php

namespace App\Http\Controllers;


use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
           'index',
            'create',
            ]);
    }
    
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
        
        //return view('hotel');
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
       // $this->validate(request(), [
            
       //      'hotelname' => 'required|unique:hotels|min:5',
       //      'state' => 'required',
       //      'phonenumber' => 'min:11',
       //      'description' => 'required|min:11',
       //      //'image' => 'required | mimes:jpeg,jpg,png,bmp | max:1000',
            
            
       //     ]);
        
        //saving to database
        // $aHotel = Hotel::create([
        //     'hotelname' => request('hotelname'),
        //     'state' => request('state'), 
        //     'phonenumber' => request('phonenumber'),
        //     'description' => request('description'),
        //     'user_id' => auth()->id(),
            //  $file = $request->file('image');//get uploaded file instance 
        
            // $name = time() . $file->getClientOriginalName();//dynamically choosing a name so a name does not replace a name...e
        
            // $file->move('hotels/photos', $name);//move temporary image to a resting space
            

            
        /*if ($request->hasFile('image')){
            Storage::putFileAs(
                'public', $request->file('image'), $aHotel->id.'.jpg'
            );
            // $request->file('image');
            // $request->image->store('public');
        }
        else {
            return "No_file_selected";
        }*/
        
         //session()->flash('message', 'A new Hotel was successfully saved!');
         
        
        //redirect to create room page
        // flash('A new Home has been created');
        // return back();
        dd($request->file('files[]'));
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
       return back();
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
    
    public function addphoto(Hotel $hotel, Request $request)
    {
        dd($request->file('imgName'));
        
    //     //$request->file('image');
    //     $file = $request->file('image');//get uploaded file instance 
        
    //     $name = time() . $file->getClientOriginalName();//dynamically choosing a name so a name does not replace a name...e
        
    //     $file->move('hotels/photos', $name);//move temporary image to a resting space
        
    //     //$hotel = Hotel::locatedAt($hotel)->first();//find the hotel
        
    //     //$hotel->images()->create(['path' => "/hotels/photos/{$name}"]);//reference relationship and create a new one
        
    //     return "Done";
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
