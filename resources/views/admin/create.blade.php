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
     <div class="panel-heading">タスクを追加する</div>
     @if($errors->any())
     <div class="alert alert-danger">
      @foreach($errors->all() as $message)
      <p>{{ $message }}</p>
      @endforeach
     </div>
     @endif

     createです
     <form action="{{ route('admin.store')}}" method="post">
      {{ csrf_field() }}
      　タイトル
      <input type="text" name="title">
      <br>
      歌詞
      <textarea name="detail" class="mt-5"></textarea>
      <br>
      <input type="submit" value="登録する" class="btn btn-info">
     </form>
     @foreach ($songs as $song)
     <p class="mt-3">
      {{-- {{ $song->title }} --}}
      <a href="{{ route('admin.show',['id' => $song->id]) }}">
       {{ $song->title }}
      </a>
      <form action="{{ route('admin.destroy',['id' => $song->id]) }}" class="mt-3" method="POST">
       {{ csrf_field() }}
       <button class="btn btn-danger">削除</button>
      </form>

      <form action="{{ route('admin.edit',['id' => $song->id]) }}" class="mt-3" method="GET">
       {{ csrf_field() }}
       <button class="btn btn-success">更新</button>
      </form>
     </p>
     @endforeach
    </div>
    {{ $songs->links() }}
   </div>
  </div>
 </div>
</div>
@endsection