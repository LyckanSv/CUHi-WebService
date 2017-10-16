<?php
use Illuminate\Support\Facades\Auth;
use App\History;
use App\Category;

// Index. login, register
Route::get('/', function () {
  return view('index');
});


//Main
Route::get('/homes', function () {
  $histories = History::all();
  return view('home')->with('histories', $histories);
})->middleware('auth');


//Histories

Route::get('/historyadd', function () {
  $categories = Category::all();
  return view('histories/history-add')->with('categories', $categories);
})->middleware('auth');

Route::resource('histories','HistoryController');


Route::get('/historyoption',function (){
  $author_id = Auth::user()->id;
  $histories = History::where('author_id',$author_id)->get();
  return view('histories/history-option')->with('histories', $histories);
})->middleware('auth');

//Categories

Route::get('/categoryadd', function () {
  return view('categories/category-add');
})->middleware('auth');

Route::resource('categories','CategoryController');


Route::get('/categoryoption',function (){
  $categories = Category::all();
  return view('categories/category-option')->with('categories', $categories);
})->middleware('auth');

//Chapter

Route::get('/chapteradd', function () {
  $author_id = Auth::user()->id;
  $histories = History::where('author_id',$author_id)->get();
  return view('chapter-add')->with('histories', $histories);
})->middleware('auth');

Route::get('/chapterselector', function () {
  $author_id = Auth::user()->id;
  $histories = History::where('author_id',$author_id)->get();
  return view('chapter-update-selector')->with('histories', $histories);
})->middleware('auth');


Route::post('/chapteraddpost', 'ChapterController@addNewChapter')->middleware('auth');
Route::post('/chapterselectorpost', 'ChapterController@create')->middleware('auth');
Route::post('/chapterdeletepost', 'ChapterController@delete')->middleware('auth');
Route::post('/chapterupdateformpost', 'ChapterController@update')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
