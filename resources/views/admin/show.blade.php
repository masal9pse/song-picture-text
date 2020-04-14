{{-- @extends('layouts.app') --}}
@extends('layouts.app_admin')
@section('content')
{{ $song->detail }}
{{-- なぜ空という条件なのに出力されてしまっているのか --}}
@if (empty($song['file_name']) == '')
{{-- @if (!isset($song['file_name']) == '') --}}
<p><img src="{{ asset('/storage/img/'.$song->file_name) }}"></p>
@else
{{-- なぜかスタイルが適用されない --}}
<p class="mb-3">まだ画像は登録されていません</p>
@endif
@endsection