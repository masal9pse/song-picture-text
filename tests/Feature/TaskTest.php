<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\HomeController;
use App\Models\Song;

class TaskTest extends TestCase
{
 use RefreshDatabase;
 /**
  * A basic test example.
  *
  * @return void
  */
 public function testSongNewCreate()
 {
  $response = $this->post('/admin/store', [
   'title' => 'Sample task',
   'detail' => 'test', // 不正なデータ（数値）
  ]);
  $this->assertTrue($response);
 }
 // public function 
}
