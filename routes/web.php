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
Route::get('/', 'HomeController@index'
) -> name('homepage');

// Route for CHARACTERS
Route::get('/characters', 'HomeController@characters'
) -> name('characterspage');

// Route for COMICS
Route::get('/comics', 'ProductController@products'
) -> name('comicspage');

// Route for DETAILS COMIC
Route::get('/detail/{id}', 'ProductController@show'
) -> name('detailpage');

// Route for MOVIE
Route::get('/movie', 'HomeController@movie'
) -> name('moviepage');

// Route for TV
Route::get('/tv', 'HomeController@tv'
) -> name('tvpage');

// Route for EXAMPLE PAGE
Route::get('/example', 'HomeController@example'
) -> name('examplepage');
