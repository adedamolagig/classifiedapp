<!--@if ($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{ $flash }}
    </div>
@endif-->

@if(session()->has('flash_message'))
    <script>
         swal({
		  title: "Info",
		  text: "{{session('flash_message') }}",
		  type: "success",
		  timer: 1700,
		  confirmButtonText: false
		});
    </script>
    
@endif

