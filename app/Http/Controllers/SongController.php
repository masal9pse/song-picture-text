<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index(Request $request)
 {
  $search = $request->input('search');
  $query = DB::table('songs');

  // もしキーワードがあったら
  if ($search !== null) {
   // 半角スペースを半角に
   $search_split = mb_convert_kana($search, 's');

   // 空白で区切る
   $search_split2 = preg_split('/[\s]+/', $search_split, -1, PREG_SPLIT_NO_EMPTY);

   foreach ($search_split2 as $value) {
    $query->where('title', 'like', '%' . $value . '%');
   }
  }

  $query->select('id', 'title', 'detail', 'created_at');
  $query->orderBy('created_at', 'desc');
  $songs = $query->paginate(10);

  return view('songs.index', [
   'songs' => $songs
  ]);
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
  //
 }

 /**
  * Display the specified resource.
  *
  * @param  \App\Song  $song
  * @return \Illuminate\Http\Response
  */
 public function show(Song $song)
 {
  // dd($song);
  return view('songs.show', [
   'song' => $song
  ]);
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Song  $song
  * @return \Illuminate\Http\Response
  */
 public function edit(Song $song)
 {
  //
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Song  $song
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, Song $song)
 {
  //
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Song  $song
  * @return \Illuminate\Http\Response
  */
 public function destroy(Song $song)
 {
  //
 }
}
