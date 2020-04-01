<?php

namespace App\Http\Controllers\Admin;  // \Adminを追加

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
  $title = $request->input('title');
  $detail = $request->input('detail');
  dd($title, $detail);
 }
}
