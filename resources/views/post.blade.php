@extends('layouts.main')

@section('container')

    <div class="Post-Section">
        <article>
            <h2>{{ $post["title"] }}</h2>
            <h5>{{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
    
        <a href="/posts">Back to Post</a>
    </div>

@endsection