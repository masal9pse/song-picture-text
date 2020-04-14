@extends('layouts.app')
@section('content')
{{ $song->detail }}
@if (!empty($song['file_name']))
{{-- @if (!isset($song['file_name']) == '') --}}
<p><img src="{{ asset('/storage/img/'.$song->file_name) }}"></p>
@else
{{-- なぜかスタイルが適用されない --}}
<p class="mb-3">まだ画像は登録されていません</p>
@endif
@endsection