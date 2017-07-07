<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Room;

class RoomController extends Controller
{
    //

    public function create(Request $request, $id=null){
        $one_room = $id?Room::find($id):null;
        return view('admin.rooms_create', ['room' => $one_room]);
    }

    public function save(Request $request, $id=null){
        $validate = Validator::make($request->all(), [
            'room_name'=> 'required|min:5',
            'room_capacity'=> 'required|min:2',
            'room_description'=>'required',
            'room_has_toilet'=>'required|in:1,0'
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }
        try{
            if(Room::create($request->except('token'))){
                $request->session()->flash('success', 'New Room Successfully Created');
                return back();
            }
            else{
                return back()->withErrors([
                    'db-error'=>'Serious error occured, cound not add Room'
                ])->withInput();
            }
        }
        catch(\Illuminate\Database\QueryException $e){
            return back()->withErrors([
                'db-error'=>'Serious error occured, Probably a duplicate Room'
            ])->withInput();
        }
    }

    public function search(Request $request){
        $search_string = $request->input('search_string');
        $room = Room::where('id', $search_string)
            ->orwhere('room_name', $search_string)
            ->get()->first();
        if($room){
            return redirect(route('admin.rooms.create', ['id'=>$room->id]));
        }
        else{
            return back()->withErrors([
                'search-error'=>'Room not found using : '.$search_string
            ])->withInput();
        }
    }

}
