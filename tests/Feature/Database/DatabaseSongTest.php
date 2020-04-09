<?php

namespace Tests\Feature\Database;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use App\Models\Song;

class DatabaseSongTest extends TestCase
{
 // use RefreshDatabase;
 /**
  * A basic test example.
  *
  * @return void
  */
 public function testSongDatabase1()
 {
  $this->assertTrue(
   Schema::hasColumns('books', [
    'id', 'title', 'author'
   ]),
   // 1
  );
 }

 public function testSongDatabase2()
 {
  $song = new Song();
  $song->title = 'test1';
  $song->detail = 'test2';
  $saveSong = $song->save();

  $this->assertTrue($saveSong);
 }

 public function testSongDatabase3()
 {
  $song = [
   'title' => 'test1',
  ];

  $this->assertDatabaseHas('songs', $song);
 }
}
