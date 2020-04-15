@extends('layouts.app_admin')

@section('content')
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
    <div class="card-body">
     @if (session('status'))
     <div class="alert alert-success" role="alert">
      {{ session('status') }}
     </div>
     @endif
     @if ($message = Session::get('success'))
     <p class="text-primary">{{ $message }}</p>
     @endif
     {{ Form::open(['method' => 'get'],['route' => 'admin.create'],['class' => "form-inline my-2 my-lg-0"]) }}
     <input class="form-control mr-sm-2" name="search" type="search" placeholder="検索" aria-label="Search">
     <button class="btn btn-success my-2 my-sm-0" type="submit">検索する</button>
     {{Form::close()}}

     <div class="panel-heading">タスクを追加する</div>
     @if($errors->any())
     <div class="alert alert-danger">
      @foreach($errors->all() as $message)
      <p>{{ $message }}</p>
      @endforeach
     </div>
     @endif

     createです
     {{-- {{Form::open(['method' => 'post'],['route' => 'admin.store'],['files' => true])}} --}}
     <form action="{{ route('admin.store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      　タイトル
      <input type="text" name="title">
      <br>
      歌詞
      <textarea name="detail" class="mt-5"></textarea>
      <br>
      <input type="file" class="form-control" name="file_name">
      <input type="submit" value="登録する" class="btn btn-info">
     </form>
     {{-- {{Form::close()}} --}}
     @foreach ($songs as $song)
     <p class="mt-3">
      <a href="{{ route('admin.show',['id' => $song->id]) }}">
       {{ $song->title }}
      </a>
      {{Form::model($song, ['route' => ['admin.destroy', $song->id]])}}
      <button class="btn btn-danger">削除</button>
      {{Form::close()}}

      {{-- {{Form::model($song, ['route' => ['admin.edit', $song->id]])}} --}}
      <form action="{{ route('admin.edit',['id' => $song->id]) }}" class="mt-3" method="GET">
       {{ csrf_field() }}
       <button class="btn btn-success">更新</button>
      </form>
      {{-- {{Form::close()}} --}}
     </p>
     @endforeach
    </div>
    {{ $songs->links() }}
   </div>
  </div>
 </div>
</div>
@endsection