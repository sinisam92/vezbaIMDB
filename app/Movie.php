<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title','genre','director','year','storyline'
    ];

    const VALIDATION_RULES = [
        'title' => 'required',
        'genre' => 'required',
        'year' => 'required | digits:4|integer|min:1900|max:2018',
        'storyline' => 'required | max:1000'
    ];
}
