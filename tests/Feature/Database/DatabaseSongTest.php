<?php

namespace Tests\Feature\Database;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;

class DatabaseSongTest extends TestCase
{
 use RefreshDatabase;
 /**
  * A basic test example.
  *
  * @return void
  */
 public function testSongDatabase()
 {
  $this->assertTrue(
   Schema::hasColumns('books', [
    'id', 'title', 'author'
   ]),
   // 1
  );
 }
}
