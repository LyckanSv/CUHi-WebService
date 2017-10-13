<?php

namespace App\Http\Controllers;

use App\Chapter;
use App\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $posicion_coincidencia = strpos($request->history_id, '-', 0);
      $history_id = substr($request->history_id, 0, $posicion_coincidencia);
      $chapter = Chapter::where('history_id',$history_id)->get();
      return view('chapter-selector')->with('chapters', $chapter);
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
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(Chapter $chapter)
    {
        //
    }


    public function destroy(Request $request)
    {

    }

    public function addNewChapter(Request $request){
      $this->validate($request, [
        'body' => 'required',
        'history_id' => 'required',
        'image' => 'required|image',
        ]);

      $posicion_coincidencia = strpos($request->history_id, '-', 0);
      $history_id = substr($request->history_id, 0, $posicion_coincidencia);
      $path = Storage::putFile('public/imagechapter', $request->file('image'));
      $url = Storage::url($path);
      $history = History::find($history_id);
      $chapter = new Chapter;
      $chapter->history_id = $history_id;
      $chapter->chapter = $history->chapters + 1;
      $chapter->image_url = $url;
      $chapter->image_path = $path;
      $chapter->body = $request->body;
      $chapter->save();
      $history->chapters = $chapter->chapter;
      $history->save();
      return view('chapter-add-result')->with('chapter', $chapter);
    }

    public function delete(Request $request){
      $posicion_coincidencia = strpos($request->chapter_id, '-', 0);
      $chapter_id = substr($request->chapter_id, 0, $posicion_coincidencia);
      $chapter = Chapter::find($chapter_id);
      $history = History::find($chapter->history_id);
      $history->chapters-= 1;
      Storage::delete($chapter->image_path);
      $chapter->delete();
      $history->save();
      return "ok delete";
    }

    public function update(Request $request){
      return "ok update";
    }
}
