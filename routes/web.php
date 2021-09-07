<?php

use Illuminate\Support\Facades\Route;

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

// Route for HOME
Route::get('/', function () {
    return view('home');
}) -> name('homepage');

// Route for CHARACTERS
Route::get('/characters', function () {
    return view('characters');
}) -> name('characterspage');

// Route for COMICS
Route::get('/comics', function () {
    $data = ['allComics' => config('comics')];
    return view('comics', $data);
}) -> name('comicspage');

// Route for DETAILS COMIC
Route::get('/detail/{id}', function ($id) {
    $books = config('comics');
    $data = ['comic' => $books[$id]];
    return view('detail', $data);
}) -> name('detailpage');


// Route for MOVIE
Route::get('/movie', function () {
    return view('movie');
}) -> name('moviepage');

// Route for TV
Route::get('/tv', function () {
    return view('tv');
}) -> name('tvpage');

// Route for EXAMPLE PAGE
Route::get('/example', function () {
    return view('example');
}) -> name('examplepage');
