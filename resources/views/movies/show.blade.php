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

    @if(count($movie->comments))

        <h4>Comments</h4>
        <ul class="list-unstyled">
            @foreach($movie->comments as $comment)
                <li>
                    <p> {{ $comment->content }} </p>
                    <form method="POST" action="/posts/{{ $movie->id }}/comments/{{ $comment->id }}"> 
                        {{ csrf_field() }} 
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </li>
            @endforeach
            
        </ul>

    @endif
@endsection