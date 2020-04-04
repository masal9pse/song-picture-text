<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use DB;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends DuskTestCase
{
 use RefreshDatabase;
 /**
  * A Dusk test example.
  *@test
  * @return void
  */
 public function LoginExample()
 {

  DB::table('users')->truncate(); // データ全削除
  $this->browse(function ($browser) {
   // ユーザー登録
   $browser->visit('/register')
    ->type('name', 'テスト 太郎')
    ->type('email', 'test_taro@regrex.jp')
    ->type('password', '1qaz2wsx');
   // ->press('Register');
  });
 }
}
