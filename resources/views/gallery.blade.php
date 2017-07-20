@extends('layouts.our-layout')
@php
$page_title = 'Gallery';
$selected_menu = 'gallery';
@endphp
@section('body')
    @include('partial.home-header')
    <section class="tm-white-bg section-padding-bottom">
        <div class="container">
        <div class="row">
            <div class="tm-section-header section-margin-top">
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Gallery</h2></div>
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
            </div>
            
            <p>{{ $hotel->hotelname }} is located in {{ $hotel->state }} </p>
            @foreach($hotel->rooms as $room)
            
            <!--<article>
                {{$room->room_description}}
            </article>-->
            
            @endforeach
            <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Create a Room</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                @if($errors->first())
                                    <p class="alert alert-danger text-center">{{ $errors->first() }}</p>
                                @elseif(session('success'))
                                    <p class="alert alert-success text-center">{{ session('success') }}</p>
                                @endif
                            </div>
                            <div class="col-lg-6 col-md-6 tm-contact-form-input">
                                
                                <form method="post" action="{{ route('submit', $hotel) }}">
                                    {{ csrf_field() }}
                                    <div class="form-group {{ $errors->has('room_name')?'has-error':'' }}">
                                        <label>Room Name</label>
                                        <input type="text" name="room_name" value="{{ isset($room->room_name)?$room->room_name:old('room_name') }}" class="form-control"/>
                                    </div>
                                    <div class="form-group {{ $errors->has('room_capacity')?'has-error':'' }}">
                                        <label>Room Capacity</label>
                                        <input type="text" name="room_capacity" value="{{ isset($room->room_capacity)?$room->room_capacity:old('room_capacity') }}" class="form-control"/>
                                    </div>
                                    <div class="form-group {{ $errors->has('room_description')?'has-error':'' }}">
                                        <label>Room Description</label>
                                        <textarea name="room_description" class="form-control">{{ isset($room->room_description)?$room->room_description:old('room_description') }}</textarea>
                                    </div>
                                    <div class="form-group {{ $errors->has('room_has_toilet')?'has-error':'' }}">
                                        <label>Has Toilet ?</label>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="room_has_toilet" class="" value="1" {{ isset($room->room_has_toilet)?($room->room_has_toilet==1)?'checked':'':'' }}/> Yes
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="room_has_toilet" class="" value="0" {{isset($room->room_has_toilet)?($room->room_has_toilet==0)?'checked':'':''}}/> No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Add Room</button>
                                    </div>
                                </form>
                               
                            </div>
                            <div class="col-lg-6 col-md-6 tm-contact-form-input">
                                <h4>Search box</h4>
                                <form method="post" action="{{ route('submit.room.search') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Room Name</label>
                                        <input type="text" name="search_string" value="{{ old('search_string') }}" class="form-control"/>
                                    </div>
                                    <div class="form-group pull-right">
                                        <button class="btn btn-warning" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                             <div class="col-lg-6 col-md-6 tm-contact-form-input">
                                
                                    <h5>Set price for room Types</h5>
                                    
                                        
                                    <form method="post" action="{{ route('store.price', $room->id) }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Set price for <!--name of room--></label>
                
                                            <div class="input-field">
                                                <label for="start_dt">Start Date</label>
                                                <input input-date type="date" id="start_dt" name="available_at" />
                                            
                                            
                                                <label for="end_dt">End Date</label>
                                                <input input-date type="date"  id="end_dt" name="endAvailability_at" />
                                            
                                            </div>
                                            <div class="input-group">
                                             
                                              <span class="input-group-addon">$</span>
                                              <span class="input-group-addon">0.00</span>
                                              <input type="text" class="form-control" placeholder="price" aria-label="Text input with radio button">
                                            </div>
                                             <br />
                                            <center><button class="btn" type="submit">Set</button></center>
                                        </div>
                                        
                                    </form>    
                                    <div class="row" some_javascript="message!=null">
                                        <div class="card-panel">
                                            <span class="blue-text text-darken-2">message</span>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
            