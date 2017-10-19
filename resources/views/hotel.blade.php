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
                    <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">{{ isset($hotel->hotelname)?'Update Hotel':'Create a Home' }}</h2></div>
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
                </div>
            </div>
            
            
            @include ('layouts.flash')
            
            <!--form section-->
          
            <form method="POST" action="{{ route ('hotel.store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
            
                
                    
                  @include ('layouts.errors')
                  
                   
                 
                  <div class="form-group">
                    <label for="hotelName">Home Address</label>
                    <input type="text"  class="form-control" id="hotelname" name="hotelname" 
                        value="{{ old('hotelname') }}" / > <!-- required autofocus / > -->
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
                    <label for="description">A little about your Home</label>
                    <textarea type="text" name="description" class="form-control" id="state" name="description" 
                        value="{{ old('description') }}" rows="10" / > <!-- required autofocus / > -->
                    </textarea>   
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="contact">Contact Details</label>
                    <input type="tel" class="form-control" id="number" name="phonenumber" value="{{ old('phonenumber') }}" placeholder="+234 801 234 5678" / > <!-- required autofocus / > -->
                  </div>
                  
                 <!-- <div class="form-group">
                    <label for="image">Hotel Photos</label>
                    <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}" multiple required autofocus />
                  </div>-->
                
                
                <!-- <input type="file" id="image" name="image" class="dropzone" >
                  
                      <div class="dz-default dz-message"> 
                      upload a minimum of Eight (8) beautiful pictures of your hotel here 
                      
                      </div>
                </input> -->

                <div class="form-group">
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add pictures...</span>
                    <!-- The file input field used as target for the file upload widget -->
                    <input id="fileupload" type="file" name="files[]" multiple>
                </span>
                
                  <a id="files" class="files"></a>
                 </div>
                

                <div></div>
                <!-- <input type="file" name="image" id="name" class="dropzone"> -->
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Create Hotel</button>
                  </div>
                </div>
                  
                 
                  
        
        
            </form>
        
        
         @section('scripts.footer')
           <!--  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script> -->
            
           <!--  <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script> -->
            <!-- <script type="text/javascript" src="{{ asset('js/jquery.iframe-transport.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/jquery.fileupload.js') }}"></script>
            <script src="{{ asset('js/jquery.fileupload-image.js')}}"></script> -->

          
            <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
            <script src="{{ asset ('js/jquery.ui.widget.js')}}"></script>
            <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
            <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
            <!-- The Canvas to Blob plugin is included for image resizing functionality -->
            <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
            <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
            <script src="{{ asset('js/jquery.iframe-transport.js')}}"></script>
            <!-- The basic File Upload plugin -->
            <script src="{{ asset('js/jquery.fileupload.js')}}"></script>
            <!-- The File Upload processing plugin -->
            <script src="{{asset('js/jquery.fileupload-process.js')}}"></script>
            <!-- The File Upload image preview & resize plugin -->
            <script src="{{asset('js/jquery.fileupload-image.js')}}"></script>
            <!-- The File Upload audio preview plugin -->
            <script src="{{asset('js/jquery.fileupload-audio.js')}}"></script>
            <!-- The File Upload video preview plugin -->
            <script src="{{asset('js/jquery.fileupload-video.js')}}"></script>
            <!-- The File Upload validation plugin -->
            <script src="{{asset('js/jquery.fileupload-validate.js')}}"></script>
            
            <script>

               $(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = "{{ route ('hotel.store')}}",
                      uploadButton = $('<button/>')
                          .addClass('btn btn-primary')
                          .prop('disabled', true)
                          .text('Processing...')
                          .on('click', function () {
                              var $this = $(this),
                                  data = $this.data();
                              $this
                                  .off('click')
                                  .text('Abort')
                                  .on('click', function () {
                                      $this.remove();
                                      data.abort();
                                  });
                              data.submit().always(function () {
                                  $this.remove();
                              });
                          });
                  $('#fileupload').fileupload({
                      url: url,
                      dataType: 'json',
                      autoUpload: false,
                      acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                      maxFileSize: 999000,
                      // Enable image resizing, except for Android and Opera,
                      // which actually support image resizing, but fail to
                      // send Blob objects via XHR requests:
                      disableImageResize: /Android(?!.*Chrome)|Opera/
                          .test(window.navigator.userAgent),
                      previewMaxWidth: 100,
                      previewMaxHeight: 100,
                      previewCrop: true
                  }).on('fileuploadadd', function (e, data) {
                      data.context = $('<div/>').appendTo('#files');
                      $.each(data.files, function (index, file) {
                          var node = $('<p/>')
                                  .append($('<span/>').text(file.name));
                          if (!index) {
                              node
                                  .append('<br>')
                                  .append(uploadButton.clone(true).data(data));
                          }
                          node.appendTo(data.context);
                      });
                  }).on('fileuploadprocessalways', function (e, data) {
                      var index = data.index,
                          file = data.files[index],
                          node = $(data.context.children()[index]);
                      if (file.preview) {
                          node
                              .prepend('<br>')
                              .prepend(file.preview);
                      }
                      if (file.error) {
                          node
                              .append('<br>')
                              .append($('<span class="text-danger"/>').text(file.error));
                      }
                      if (index + 1 === data.files.length) {
                          data.context.find('button')
                              .text('Upload')
                              .prop('disabled', !!data.files.error);
                      }
                  }).on('fileuploadprogressall', function (e, data) {
                      var progress = parseInt(data.loaded / data.total * 100, 10);
                      $('#progress .progress-bar').css(
                          'width',
                          progress + '%'
                      );
                  }).on('fileuploaddone', function (e, data) {
                      $.each(data.result.files, function (index, file) {
                          if (file.url) {
                              var link = $('<a>')
                                  .attr('target', '_blank')
                                  .prop('href', file.url);
                              $(data.context.children()[index])
                                  .wrap(link);
                          } else if (file.error) {
                              var error = $('<span class="text-danger"/>').text(file.error);
                              $(data.context.children()[index])
                                  .append('<br>')
                                  .append(error);
                          }
                      });
                  }).on('fileuploadfail', function (e, data) {
                      $.each(data.files, function (index) {
                          var error = $('<span class="text-danger"/>').text('File upload failed.');
                          $(data.context.children()[index])
                              .append('<br>')
                              .append(error);
                      });
                  }).prop('disabled', !$.support.fileInput)
                      .parent().addClass($.support.fileInput ? undefined : 'disabled');
              });
              
            </script>
          @stop
          
          
          
          
            
            
            
        </div>
        
        </section>
        
        
    @endsection