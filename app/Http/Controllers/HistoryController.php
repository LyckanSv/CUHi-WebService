<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;
use App\Http\Requests\HistoryFormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{

  public function index()
  {
    $histories = History::all();
    $pila = array();
    foreach ( $histories as $h) {
      $contenedor = array(
        "id_history"=> (string)($h->id),
        "autor_name"=> $h->author_name,
        "autor_id"=> $h->author_id,
        "title"=> $h->title,
        "category"=> $h->category,
        "image"=> $h->url_image,
        "chapters"=> $h->chapters,
        "description"=> $h->description,
        "date"=> (string)($h->date),
        "rating"=> $h->rating
      );

      array_push($pila, $contenedor);
    }
    return json_encode(["histories"=>$pila],JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {

  }

  /**
  * Display the specified resource.
  *
  * @param  \App\History  $history
  * @return \Illuminate\Http\Response
  */
  public function show(History $history)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\History  $history
  * @return \Illuminate\Http\Response
  */
  public function edit(History $history)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\History  $history
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, History $history)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\History  $history
  * @return \Illuminate\Http\Response
  */
  public function destroy(History $history)
  {
    //
  }

  public function addNewHistory(HistoryFormRequest $request){
    $this->validate($request, [
      'image' => 'required|image',
    ]);

    $path = Storage::putFile('public/imagehistory', $request->file('image'));
    $url = Storage::url($path);

    $history = new History;

    $history->author_name = Auth::user()->name;
    $history->author_id = Auth::user()->id;
    $history->title = $request->title;
    $history->category = $request->category;
    $history->url_image = $url;
    $history->image_path = $path;
    $history->chapters = "0";
    $history->description = $request->description;
    $history->date = date($request->date);
    $history->rating = 0;
    $history->save();
    return view('history-add-result')->with('history', $history);

  }
}
