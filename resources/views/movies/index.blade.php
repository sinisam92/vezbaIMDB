@extends('layouts.master')

@section('title')
    All Movies
@endsection

@section('content')
    <h1>Movies</h1>
    <ul class="list-unstyled">
        @foreach($movies as $movie)
        <li>
            <div class="blog-post">
                <h2 class="blog-post-title">
                        <a href="/movies/{{ $movie->id }}">
                            {{ $movie->title }}
                        </a>
                        
                </h2>
                <p>{{ $movie->storyline }}</p>
            </div>
        </li>
        @endforeach
    </ul>
@endsection
 