@extends('layouts.app')
@section('content')
<div class="container">
 {{ Form::open(['method' => 'get'],['route' => 'admin.create'],['class' => "form-inline my-2 my-lg-0"]) }}
 <input class="form-control mr-sm-2" name="search" type="search" placeholder="検索" aria-label="Search">
 <button class="btn btn-success my-2 my-sm-0" type="submit">検索する</button>
 {{Form::close()}}

 @foreach ($songs as $song)
 <p>
  <a href="{{ route('songs.show',['id' => $song->id]) }}">
   {{ $song->title }}
  </a>
 </p>
 @endforeach

 {{ $songs->links() }}

 <p class="{{ Request::is('tags', 'tags/*') ? 'active' : '' }}">
  <a class="nav-link" href="{{ route('tags.index') }}">タグ</a>
 </p>
</div>
@endsection