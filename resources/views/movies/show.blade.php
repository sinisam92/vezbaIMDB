@extends('layouts.master')

@section('title')
    {{ $movie->title}}
@endsection

@section('content')
    <h2><a href="/movies">Back To All Movies</a></h2>
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $movie->title }}</h2>
        <p>Genre: <a href="/genres/{{$movie->genre}}">{{ $movie->genre}}</a> </p> 
        <p>Relise Date: {{ $movie->year }}</p>
        <p>Director: {{ $movie->director}}</p>
        <p>Storyline: {{ $movie->storyline }}</p>
    

    @if(count($movie->comments))
        <h4>Comments</h4>
        <ul class="list-unstyled">
            @foreach($movie->comments as $comment)
                <li>
                    <p>Posted at: {{ $comment->created_at }}</p>
                    <p> {{ $comment->content }} </p>
                    {{-- <form method="POST" action="/posts/{{ $movie->id }}/comments/{{ $comment->id }}"> 
                        {{ csrf_field() }} 
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form> --}}
                </li>
            @endforeach        
        </ul>
    @endif

    <h4>Comment on this topic?</h4>
        <form method="post" action="/movies/{{ $movie->id }}/comments">

            {{ csrf_field() }}
            <div class="form-group">
                    <label>Comment</label> 
                    <textarea type="textarea" class="form-control" id="content" name="content" placeholder="Enter comment"></textarea>
                    @include('layouts.partials.error-message', ['field' => 'content'])
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection