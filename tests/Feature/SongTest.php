<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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
  // $this->visit('/') //  掲示板のトップページにアクセスしてみる
  //  ->see('Laravel') //           「掲示板」という文字列が見える
  //  ->see('愛を込めて花束を') //         「新規投稿」という文字列もある
  //  ->click('愛を込めて花束を') //        新規投稿リンクをクリックしてみる
  //  ->seePageIs('/songs/2') // 新規投稿ページに遷移する
  //  ->see('いつまでもそばにいて'); //     新規投稿ページには「新規記事投稿」という文字列がある
  // // $this->assertTrue(true);
  $this->browse(function ($browser) {
   $browser->visit('/')
    ->assertSee('愛を込めて');
  });
 }
}
