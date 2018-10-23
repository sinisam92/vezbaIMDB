<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

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
}

