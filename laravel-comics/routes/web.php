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

Route::get('/', function () {
    return view('page.home-page.home');
}) -> name('home');

Route::get('/characters', function () {
    return view('page.characters-page.characters');
}) -> name('characters');

Route::get('/comics', function () {
    $data = ['seriesComics' => config('data.comics')];
    return view('page.comics-page.comics', $data);
}) -> name('comics');

Route::get('/movies', function () {
    return view('page.movies-page.movies');
}) -> name('movies');

Route::get('/tv', function () {
    return view('page.tv-page.tv');
}) -> name('tv');

Route::get('/games', function () {
    return view('page.games-page.games');
}) -> name('games');

Route::get('/collectibles', function () {
    return view('page.collectibles-page.collectibles');
}) -> name('collectibles');

Route::get('/videos', function () {
    return view('page.videos-page.videos');
}) -> name('videos');

Route::get('/fans', function () {
    return view('page.fans-page.fans');
}) -> name('fans');

Route::get('/news', function () {
    return view('page.news-page.news');
}) -> name('news');

Route::get('/shop', function () {
    return view('page.shop-page.shop');
}) -> name('shop');

