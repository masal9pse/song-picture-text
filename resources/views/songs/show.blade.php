@extends('layouts.app')
@section('content')
{{ $song->detail }}
@if (!empty($song['file_name']))
<p><img src="{{ asset('/storage/img/'.$song->file_name) }}"></p>
@else
{{-- なぜかスタイルが適用されない --}}
<p class="mb-3">まだ画像は登録されていません</p>
@endif

@if (Auth::check())
@if ($like)
<!-- いいね取り消しフォーム -->
{{ Form::model($song, array('action' => array('LikesController@destroy', $song->id, $like->id))) }}
<button type="submit">
 ♡ いいね {{ $song->likes_count }}
</button>
{!! Form::close() !!}
@else
<!-- いいねフォーム -->
{{ Form::model($song, array('action' => array('LikesController@store', $song->id))) }}
<button type="submit">
 + いいね {{ $song->likes_count }}
</button>
{!! Form::close() !!}
@endif
@endif
@endsection