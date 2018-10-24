<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class CommentsController extends Controller
{
    public function store($movieId)
    {
        $movie = Movie::findOrFail($movieId);

        $this->validate(
            request(),
            Comment::VALIDATION_RULES
           
        );

        $movie->comments()->create(request()->all());
       

        return redirect("/movies/{$movieId}");
    }
}
