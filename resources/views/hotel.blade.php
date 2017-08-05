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
                    <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">{{ isset($hotel->hotelname)?'Update Hotel':'Create a Hotel' }}</h2></div>
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
                </div>
            </div>
            
            
            @include ('layouts.flash')
            
            <!--form section-->
          
            <form method="POST" action="{{ route ('hotel.store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
            
                
                    
                  @include ('layouts.errors')
                  
                   
                 
                  <div class="form-group">
                    <label for="hotelName">Name of Hotel</label>
                    <input type="text"  class="form-control" id="hotelname" name="hotelname" 
                        value="{{ old('hotelname') }}" required autofocus />
                  </div>
                  
                  <div class="form-group">
                    <label for="state">State</label>
                    <select id="state"  class="form-control js-example-basic-single" name="state">
                    @foreach (App\Http\Utilities\State::all() as $state )
                      <option value="{{ $state }}">{{ $state }} </option>
                    @endforeach
                    </select>
                  </div>
                    
                    <div class="form-group">
                        <label for="parking-space">Parking Space</label>
                    </div>
                    
                  <div class="form-group">
                    <label for="description">A little about your Hotel</label>
                    <textarea type="text" name="description" class="form-control" id="state" name="description" 
                        value="{{ old('description') }}" rows="10" required autofocus>
                    </textarea>   
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="contact">Contact Details</label>
                    <input type="tel" class="form-control" id="number" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="+234 801 234 5678" required autofocus>
                  </div>
                  
                 <!-- <div class="form-group">
                    <label for="image">Hotel Photos</label>
                    <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}" multiple required autofocus />
                  </div>-->
                
                
                <div id="image" name="image" class="dropzone">
                  
                      <div class="dz-default dz-message"> 
                      upload a minimum of Eight (8) beautiful pictures of your hotel here 
                      
                      </div>
                </div>
                
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Create Hotel</button>
                  </div>
                </div>
                  
                 
                  
        
        
            </form>
        
        
         @section('scripts.footer')
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
            
            <script>
                $(document).ready(function () {
                    Dropzone.autoDiscover = false;
                    $("#image").dropzone({
                        url: "{{ route ('photo.save') }}",
                        addRemoveLinks: true,
                        maxFilesize: 3,
                        headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          
                        },
                        acceptedFiles: '.jpg, .jpeg, .png. bmp',
                        paramName: 'image',
                        success: function (file, response) {
                            var imgName = response;
                            file.previewElement.classList.add("dz-success");
                            console.log("Successfully uploaded :" + imgName);
                        },
                        error: function (file, response) {
                            file.previewElement.classList.add("dz-error");
                        }
                    });
                });
              
            </script>
          @stop
          
          
          
          
            
            
            
        </div>
        
        </section>
        
        
    @endsection