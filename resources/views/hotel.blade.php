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
            <form method="POST" action="{{ route ('hotel.store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-sm-4">
                    
                  @include ('layouts.errors')
                  
                  @if ($flash = session('message'))
                      <div id="flash-message" class="alert alert-success" role="alert">
                          {{ $flash }}
                      </div>
                  @endif
                  
                    <label for="NameOfHotel">Name of Hotel</label>
                    <input type="text"  class="form-control" id="hotelname" name="hotelname" required="required">
                    <br/>
                    
                    <label for="locationOfHotel">location of Hotel
                    
                    <!--<select type="textarea" class="form-control" id="state" name="state" placeholder="state" required>-->
                    
                    <select class="js-example-basic-single" id="state" name="state" placeholder="state" required>
                      <option value="AG">Agege, Lagos</option>
                      <option value="AJ">Ajeromi LGA, Lagos</option>
                      <option value="AL">Alimosho, Lagos</option>
                      <option value="AO">Amuwo-Odofin, Lagos</option>
                      <option value="AP">Apapa, Lagos</option>
                      <option value="BD">Badagry, Lagos</option>
                      <option value="EP">Epe, Lagos</option>
                      <option value="EO">Eti-Osa, Lagos</option>
                      <option value="IL">Ibeju-Lekki, Lagos</option>
                      <option value="I/I">Ifako/Ijaye, Lagos</option>
                      <option value="IJK">Ikeja, Lagos</option>
                      <option value="IKD">Ikorodu, Lagos</option>
                      <option value="KS">Kosofe, Lagos</option>
                      <option value="LI">Lagos-Island, Lagos</option>
                      <option value="LM">Lagos-Mainland, Lagos</option>
                      <option value="MS">Mushin, Lagos</option>
                      <option value="OJ">Ojo, Lagos</option>
                      <option value="OS">Oshodi-Isolo, Lagos</option>
                      <option value="SH">Shomolu, Lagos</option>
                      <option value="SU">Surulere, LAgos</option>
                    </select>
                    </label>
                    
                    <hr>
                    <label for="contact">Contact Details</label>
                    <input type="tel" class="form-control" id="number" name="phonenumber" placeholder="+234 801 234 5678" required>

                    <br />
                    
                    <label class="custom-file">
                      <input type="file" id="file" onchange="previewFile()" class="custom-file-input" name="image"  required="required">
                      <img src="" height="200" width="200" alt="Hotel preview..."><span class=""></span>
                      Hotel Picture
                    </label>
                    
                    
                   
                    
                    
                    <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </div>
            </form>
            
            
            
            
            <div class="col-sm-3 offset-sm-1 blog-si"><!--something should be here--></div>
        </div>
        
        </section>
        
        
    @endsection