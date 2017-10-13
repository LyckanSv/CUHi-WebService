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

Route::get('/historyadd', function () {
    return view('history-add');
})->middleware('auth');

Route::post('/historyaddpost', 'HistoryController@addNewHistory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
