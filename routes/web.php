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
    return view('homepage');
})->name('home');

Route::get('/comics-list', function () {
    $comics = config('db.comics');
    return view('comics-list', compact('comics'));
})->name('comics-list');

Route::get('/comic-detail/{index}', function ($comic_key) {
    $comics = config('db.comics');
    $comic = $comics[$comic_key];
    return view('comics-list', compact('comic', 'comic_key'));
})->name('comic-detail');

