<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Admin;

class Song extends Model
{
 protected $fillable = [
  'title', 'detail'
 ];

 public function admin()
 {
  return $this->belongsTo('App\Admin');
 }
}
