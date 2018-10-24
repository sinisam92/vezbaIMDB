@extends('layouts.master')

@section('title')
    Add Movie
@endsection

@section('content')
    <form method="POST" action="/movies">

        {{ csrf_field() }}
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Movie title">
            @include('layouts.partials.error-message', ['field' => 'title'])
        </div>
        <div class="form-group">
            <label>Genre</label> 
            <input type="text" class="form-control" name="genre" placeholder="What ganre?">
            @include('layouts.partials.error-message', ['field' => 'genre'])
        </div>
        <div class="form-group">
            <label>Director</label>
            <input type="text" class="form-control" name="director" placeholder="Director's name">
            @include('layouts.partials.error-message', ['field' => 'director'])
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="number" class="form-control" name="year" placeholder="Realise Date">
            @include('layouts.partials.error-message', ['field' => 'year'])
        </div>
        <div class="form-group">
            <label>Storyline</label>
            <textarea type="textarea" class="form-control" name="storyline" placeholder="Give us a peek on storyline!"></textarea>
            @include('layouts.partials.error-message', ['field' => 'storyline'])
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection