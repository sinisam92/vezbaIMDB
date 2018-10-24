<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;


class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', ['movies' => $movies]);
    }
    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.show', ['movie' => $movie]);
    }
    public function create()
    {
        return view('movies.create');
    }
    public function store()
    {
        $this->validate(
            request(),
            Movie::VALIDATION_RULES
        );
        
        Movie::create(request()->all());

        return redirect('/');
    }
}

