<!--@if ($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{ $flash }}
    </div>
@endif-->

@if(session()->has('flash_message'))
    <script>
         swal({
		  title: " {{ session('flash_message.title') }} ",
		  text: "{{session('flash_message.message') }}",
		  type: "{{session('flash_message.level')}}",
		  timer: 1700,
		  confirmButtonText: false
		});
    </script>
    
@endif

