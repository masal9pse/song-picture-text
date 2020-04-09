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
   'detail' => 111, // 不正なデータ（数値）
  ]);
  // $this->assertTrue($response);

  $response->assertSessionHasErrors([
   'detail' => '期限日 には日付を入力してください。',
  ]);
 }
 // public function 
}
