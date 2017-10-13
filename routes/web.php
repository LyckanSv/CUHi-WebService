<?php
use App\History;

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
  $histories = History::all();
        return view('index')->with('histories', $histories);
})->middleware('auth');

Route::get('/historyadd', function () {
    return view('history-add');
})->middleware('auth');

Route::get('/chapteradd', function () {
    return view('chapter-add');
})->middleware('auth');

Route::post('/historyaddpost', 'HistoryController@addNewHistory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
