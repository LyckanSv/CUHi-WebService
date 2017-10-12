<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logint', function () {
    return view('login');
});

Route::get('/regis', function () {
    return view('registers');
});

Route::get('/homes', function () {
    return view('index');
})->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
