<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('main');

Route::get('/sign_in', function () {
    return view('sign_in');
})->name('sign_in_form');

Route::get('/sign_up', function () {
    return view('sign_up');
});

Route::post('/sign_up/submit', 'App\Http\Controllers\SignUpController@submit')->name('sign_up');

Route::post('/sign_in/submit', 'App\Http\Controllers\SignInController@submit')->name('sign_in');

Route::resource('users', 'App\Http\Controllers\UserController');