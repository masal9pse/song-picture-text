<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
 protected $fillable = [
  'id', 'title', 'detail'
 ];

 // public function createSong($title, $detail)
 // {
 //  return 
 // }
}
