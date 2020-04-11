<?php

namespace App\Http\Controllers\Admin;  // \Adminを追加

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Http\Requests\CreateSongTask;
use Illuminate\Support\Facades\DB;

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
  $songs = DB::table('songs')
   ->select('id', 'title', 'detail', 'created_at')
   ->orderBy('created_at', 'desc')
   ->paginate(10);
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

 public function show($id)
 {
  // dd($id);
  // $song = new Song;
  $song = Song::find($id);
  // dd($song);
  // $songs = $songs::all();
  // dd($song);
  return view('admin.show', [
   'song' => $song
  ]);
 }

 public function edit($id)
 {
  $song = Song::find($id);

  return view('admin.edit', compact('song'));
 }

 public function update(Request $request, $id)
 {
  $song = Song::find($id);

  $song->title = $request->input('title');
  $song->detail = $request->input('detail');

  // dd($song); // エラー
  $song->save();
  // dd($song);
  return redirect()->route('admin.create');
 }

 public function destroy($id)
 {
  $song = Song::find($id);
  // dd($song);
  $song->delete();

  return redirect()->route('admin.create');
 }
}
