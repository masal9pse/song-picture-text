{{-- {{ $songs }} --}}

@foreach ($songs as $song)
    <p>
    <a href="{{ route('songs.show',$song->id) }}">
      {{ $song->title }}
     </a>
    </p>
@endforeach