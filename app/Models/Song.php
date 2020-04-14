<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
 protected $fillable = [
  'title', 'detail', 'file_name'
 ];

 public function admin()
 {
  return $this->belongsTo('App\Admin');
 }
}
