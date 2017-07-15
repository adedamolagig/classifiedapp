@extends('layouts.our-layout')
@php
$page_title = 'Hotels';
$selected_menu = 'hotels';
@endphp
    @section('body')
        @include('partial.home-header')
        
        <section class="tm-white-bg section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="tm-section-header section-margin-top">
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Create your Hotels</h2></div>
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
                </div>
            </div>
            
            <!--form section-->
            <form method="POST" action="{{ route ('hotel.store')}}">
                {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-sm-4">
                    
                  @include ('layouts.errors')
                    <label for="NameOfHotel">Name of Hotel</label>
                    <input type="text" class="form-control" id="hotelname" name="hotelname" required>
                    <br/>
                    
                    <label for="locationOfHotel">location of Hotel
                    
                    <!--<select type="textarea" class="form-control" id="state" name="state" placeholder="state" required>-->
                    
                    <select class="js-example-basic-single" id="state" name="state" placeholder="state" required>
                      <option value="AL">Alabama</option>
                        ...
                      <option value="WY">Wyoming</option>
                    </select>
                    </label>
                    
                    <hr>
                    <label for="contact">Contact Details</label>
                    <input type="tel" class="form-control" id="number" name="phonenumber" placeholder="+234 801 234 5678" required>

                    <br />
                    
                    <label class="custom-file">
                      <input type="file" id="file" onchange="previewFile()" class="custom-file-input" name="image">
                      <img src="" height="200" alt="Hotel preview..."><span class=""></span>
                      Hotel Picture
                    </label>
                    
                    
                   
                    
                    
                    
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </div>
            </form>
            
            
            
            
            <div class="col-sm-3 offset-sm-1 blog-si">hi</div>
        </div>
        </section>
        
        
    @endsection