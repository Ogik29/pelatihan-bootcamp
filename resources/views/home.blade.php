@extends('layout.main')

@section('content')
<div class="container lamao mt-3">
    <h1>Hello {{ $isi }}</h1>
    <a href="/welcome/{{ $link }}" class="btn btn-primary">To Welcome Route</a>
</div>
@endsection