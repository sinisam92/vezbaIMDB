<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::findOrFail();

        return view('/movie', compact(['movie']));
    }
}
