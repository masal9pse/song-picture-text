<?php

namespace App\Http\Controllers\Admin;  // \Adminを追加

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Song;

class HomeController extends Controller
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
 public function create()
 {
  return view('admin.create');
 }

 public function store(Request $request)
 {
  $song = new Song;
  $song->title = $request->input('title');
  $song->detail = $request->input('detail');
  // dd($song);
  $song->save();
  return redirect()->route('admin.create');
 }
}
