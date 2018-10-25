<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'MoviesController@index');

Route::prefix('/movies')->group(function () {

    Route::get('/create', 'MoviesController@create');
    Route::post('/', 'MoviesController@store');
    Route::get('/{id}', 'MoviesController@show');
    Route::get('/', 'MoviesController@index');

    Route::prefix('/{movieId}/comments')->group(function (){

        Route::post('/', 'CommentsController@store');
    });

});

Route::get('/genres/{genre}', 'GenresController@show');

   


