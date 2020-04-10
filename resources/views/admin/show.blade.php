{{-- @extends('layouts.app') --}}
@extends('layouts.app_admin')
@section('content')
{{-- @foreach ($songs as $song)
{{ $song->detail }}
@endforeach --}}
{{ $song->detail }}

@endsection