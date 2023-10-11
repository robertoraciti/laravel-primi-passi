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

Route::get('homepage', function () {
    $title_home = 'Hello HOMEPAGE';
    return view('home', compact('title_home'));
})->name('home');

Route::get('links', function () {
    $title_links = 'Hello LINKS';
    return view('links', compact('title_links'));
})->name('links');