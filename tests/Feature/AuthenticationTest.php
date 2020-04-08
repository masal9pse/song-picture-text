<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthenticationTest extends TestCase
{
 use RefreshDatabase;

 /**
  * ログインした状態でリクエストが正しく処理されるか
  */
 public function testLoggedIn()
 {
  $user = factory(User::class)->create();

  $response = $this->actingAs($user)
   ->get('/');

  $response->assertStatus(200);
 }
}
