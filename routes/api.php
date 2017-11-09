<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('/historyall', 'HistoryController@index');

Route::get('/hist/{id}', 'HistoryController@show');

Route::get('/search/{id}', 'HistoryController@search');
