<?php

namespace App;

use App\Movie;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = ['content'];

  const VALIDATION_RULES = [
      'content' => 'required | max:1000'
  ];

  public function movie()
  {
      return $this->belongsTo(Movie::class);
  }
}
