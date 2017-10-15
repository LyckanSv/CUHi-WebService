<?php
use Illuminate\Support\Facades\Auth;
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
  $author_id = Auth::user()->id;
  $histories = History::where('author_id',$author_id)->get();
  return view('chapter-add')->with('histories', $histories);
})->middleware('auth');

Route::get('/chapterselector', function () {
  $histories = History::find(Auth::user()->id)->get();
  return view('chapter-update-selector')->with('histories', $histories);
})->middleware('auth');

Route::post('/historyaddpost', 'HistoryController@addNewHistory');
Route::post('/chapteraddpost', 'ChapterController@addNewChapter')->middleware('auth');
Route::post('/chapterselectorpost', 'ChapterController@create')->middleware('auth');
Route::post('/chapterdeletepost', 'ChapterController@delete')->middleware('auth');
Route::post('/chapterupdateformpost', 'ChapterController@update')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
