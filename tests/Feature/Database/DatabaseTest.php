<?php

namespace Tests\Feature\Database;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use App\Book;

class DatabaseTest extends TestCase
{
 // use RefreshDatabase;
 /**
  * A basic test example.
  *
  * @return void
  */
 public function testDatabase()
 {
  $this->assertTrue(
   Schema::hasColumns('books', [
    'id', 'title', 'author'
   ]),
   1
  );
 }

 public function testDatabase1()
 {
  $book = new Book();
  $book->title = 'hoge';
  $book->author = 'tarou';
  // dd($book);
  $saveBook = $book->save();

  $this->assertTrue($saveBook);
 }

 public function testDatabase2()
 {
  $book = [
   'title' => 'hoge'
  ];
  $this->assertDatabaseHas('books', $book);
 }
}
