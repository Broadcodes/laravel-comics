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
});

Route::get('/characters', function () {
    return view('page.characters-page.characters');
});

Route::get('/comics', function () {
    $data = ['seriesComics' => config('data.comics')];
    return view('page.comics-page.comics', $data);
});
