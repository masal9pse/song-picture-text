<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
use App\Like;

class Song extends Model
{
 protected $fillable = [
  'title', 'detail', 'likes_count', 'file_name'
 ];

 public function admin()
 {
  return $this->belongsTo(Admin::class);
 }
 // 追加
 public function likes()
 {
  return $this->hasMany('App\Like');
 }

 public function like_by()
 {
  return Like::where('user_id', \Auth::user()->id)->first();
 }
}
