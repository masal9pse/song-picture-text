@extends('layouts.app')
@section('content')
@foreach ($songs as $song)
<p>
  {{-- <a href="{{ route('songs.show',$song->id) }}"> --}}
  <a href="{{ route('songs.show',['id' => $song->id]) }}">
    {{ $song->title }}
  </a>
</p>
@endforeach
@endsection