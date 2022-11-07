@extends('layouts.main')

@section('container')

    <div class="About-Section">
        <h1>About Page</h1>
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
    </div>
    
@endsection