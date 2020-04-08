<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class SongTest extends TestCase
{
 use RefreshDatabase;
 /**
  * A basic test example.
  * @test
  * @return void
  */
 public function testSong()
 {
  $response = $this->get('/');

  $response->assertStatus(200);
 }

 public function testBasicExample()
 {
  $response = $this->withHeaders([
   'X-Header' => 'Value',
  ])->json('POST', '/user ', ['name' => 'admin']);

  $response
   ->assertStatus(200)
   ->assertJson([
    'created' => true,
   ]);
 }

 public function testApplication()
 {
  $user = factory(User::class)->create();
 }
}
