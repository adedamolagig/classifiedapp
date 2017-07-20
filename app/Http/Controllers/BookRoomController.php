<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bookRooms/list', ['bookRoom' => Event::orderBy('start_time')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('bookRooms/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = explode(" - ", $request->input('time'));
  
        $bookroom = new Event;
        $bookroom->name = $request->input('room_name');
        //$bookroom->title = $request->input('title');
        $bookroom->start_time = $time[0];
        $bookroom->end_time = $time[1];
        $bookroom->save();
          
        session()->flash('success', 'The room was successfully booked!');
        return redirect('bookRooms/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('bookRooms/view', ['bookRoom' => Event::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('bookRooms/edit', ['bookRoom' => Event::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $time = explode(" - ", $request->input('time'));
        $bookroom = BookRoom::findOrFail($id);
        $bookroom->room_name = $request->input('room_name');
        //$bookroom->title = $request->input('title');
        $bookroom->start_time = $time[0];
        $bookroom->end_time = $time[1];
        $bookroom->save();
          
         return redirect('bookRoom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookroom = BookRoom::find($id);
        $bookroom->delete();
          
        return redirect('bookRoom');
    }
}
