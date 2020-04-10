<?php

namespace App\Http\Controllers\Admin;  // \Adminを追加

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Http\Requests\CreateSongTask;

class SongController extends Controller
{
 /**
  * Create a new controller instance.
  *
  * @return void
  */
 public function __construct()
 {
  $this->middleware('auth:admin');
 }

 /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
 public function create(Song $songs)
 {
  // dd($songs);
  $songs = $songs::all();
  // dd($songs);
  return view('admin.create', [
   'songs' => $songs
  ]);
 }

 public function store(CreateSongTask $request)
 {
  $song = new Song;
  $song->title = $request->input('title');
  $song->detail = $request->input('detail');
  // dd($song);
  $song->save();
  return redirect()->route('admin.create');
 }

 public function show(Song $song)
 {
  // $song = $song::all();
  // dd($song);
  return view('Admin.show', [
   'song' => $song
  ]);
 }
}
