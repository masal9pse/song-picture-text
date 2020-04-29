@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
     @if (session('status'))
     <div class="alert alert-success" role="alert">
      {{ session('status') }}
     </div>
     @endif
     @if($errors->any())
     <div class="alert alert-danger">
      @foreach($errors->all() as $message)
      <p>{{ $message }}</p>
      @endforeach
     </div>
     @endif
     editです
     <form action="{{ route('tags.update',['id' => $tag->id] )}}" method="post">
      {{ csrf_field() }}
      タイトル
      <input type="text" name="title" value="{{ $tag->title }}">
      <br>
      歌詞
      {{-- <input type="file" class="form-control" name="file_name" src="{{ asset('/storage/img/'.$song->file_name) }}">
      --}}
      <input type="submit" value="更新する" class="btn btn-info">
    </div>
    </form>
   </div>
  </div>
 </div>
</div>
</div>
@endsection