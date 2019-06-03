       
    <h2>
        <a href="{{ route ('hotel.view', $hotel->id) }}">
        {{ $hotel->hotelname }} </a>
    </h2>
    <img src="{{ asset($hotel->id.'.jpg') }}" width='100px'/>
    {{ $hotel->description}}
    
    
    @foreach($hotel->rooms as $room)
    
        <article>
            {{$room->room_description}}
        </article>
    
    @endforeach

    
   

   
     