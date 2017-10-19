<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Room;
use App\Hotel;

class RoomController extends Controller
{
    //

    public function create(Request $request){
        
        
    }

    public function save(Hotel $hotel){
        
       
       
       //$hotel->addroom(request('room_name'));
       Room::create([
                'room_name' => request('room_name'),
                'room_capacity' => request('room_capacity'),
                'room_description' => request('room_description'),
                'room_has_toilet' => request('room_has_toilet'),
                'price' => request('price'),
                'hotel_id' => $hotel->id
           ]);
       
       
       
       
       /**Room::create([
            'room_name' => request('room_name'), 
            
            
            'room_capacity' => request('room_capacity'),
            
            'hotel_id' => $hotel->id
            
            ]);*/
            
          
        /**if($validate->fails()){
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
        }*/
        
        return back();
        
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
