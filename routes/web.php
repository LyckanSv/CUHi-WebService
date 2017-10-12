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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
