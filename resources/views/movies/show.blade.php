@extends('layouts.master')

@section('title')
    {{ $movie->title}}
@endsection

@section('content')
    <h2><a href="/movies">Back To All Movies</a></h2>
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $movie->title }}</h2>
        <h3>{{ $movie->genre}}</h3> <p>{{ $movie->year }}</p>
        <h3>{{ $movie->director}}</h3>
        <p>{{ $movie->storyline }}</p>
    </div>
@endsection