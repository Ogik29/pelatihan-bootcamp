@extends('layout.main')

@section('content')
    <h1 class="lamao mt-3">Hello {{ $isi }}</h1>
    <a href="/welcome/{{ $link }}" class="btn btn-primary">To Welcome Route</a>
@endsection