@extends('layouts.app')
@section('content')
<form method="GET" action="{{ route('songs.index') }}" class="form-inline my-2 my-lg-0">
 <input class="form-control mr-sm-2" name="search" type="search" placeholder="検索" aria-label="Search">
 <button class="btn btn-success my-2 my-sm-0" type="submit">検索する</button>
</form>
@foreach ($songs as $song)
<p>
 <a href="{{ route('songs.show',['id' => $song->id]) }}">
  {{ $song->title }}
 </a>
</p>
@endforeach
{{ $songs->links() }}
@endsection