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

     createです
     <form action="{{ route('admin.store')}}" method="post">
      {{ csrf_field() }}
      　タイトル
      <input type="text" name="title">
      <br>
      歌詞
      {{-- <input type="text" name="detail" class="mb-3"> --}}
      <textarea name="detail" class="mt-5"></textarea>
      <br>
      <input type="submit" value="登録する" class="btn btn-info mt-5">
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection