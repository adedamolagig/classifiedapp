
    <h2>
        <a href="{{ asset ($hotel->id) }}">
        {{ $hotel->hotelname }} </a>
    </h2>
    <p>{{ $hotel->state}}</p>
    
    
    @foreach($hotel->rooms as $room)
    
    <article>
        {{$room->room_description}}
    </article>
    
    @endforeach

