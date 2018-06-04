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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/threads/{thread}', function () {
    return view('threads.detail');
})->name('threads.detail');

Route::get('/users/{user}', function () {
    return view('users.profile');
})->name('users.profile');

Auth::routes();
