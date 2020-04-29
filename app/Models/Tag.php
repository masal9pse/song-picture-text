<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
 protected $fillable = [
  'id', 'title', 'created_at', 'updated_at'
 ];
}
