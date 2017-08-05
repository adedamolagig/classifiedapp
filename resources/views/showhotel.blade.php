        @section('scripts.footer')
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
            
          @stop
    <h2>
        <a href="{{ route ('hotel.view', $hotel->id) }}">
        {{ $hotel->hotelname }} </a>
    </h2>
    <!--<img src="{{ asset($hotel->id.'.jpg') }}" width='100px'/>-->
    {{ $hotel->description}}
    
    
    @foreach($hotel->rooms as $room)
    
        <article>
            {{$room->room_description}}
        </article>
    
    @endforeach

    
    <form action="foobar" method="POST" class="dropzone">
        
    </form>

   
     