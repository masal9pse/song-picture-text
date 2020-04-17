<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//  return view('welcome');
// });

// use Illuminate\Routing\Route;

Route::get('/', 'SongController@index');
Route::resource('/songs', 'SongController');
Route::post('/songs/{song}/likes', 'LikesController@store');
Route::post('/songs/{song}/likes/{like}', 'LikesController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth:user'], function () {
 Route::get('/home', 'HomeController@index')->name('home');
});

/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function () {
 Route::get('/', function () {
  return redirect('/admin/create');
 });
 Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
 Route::post('login',    'Admin\LoginController@login');
});
/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
 Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
 Route::get('create', 'Admin\SongController@create')->name('admin.create');
 Route::post('imageStore', 'Admin\SongController@imageStore')->name('admin.imageStore');
 Route::get('show/{id}', 'Admin\SongController@show')->name('admin.show');
 Route::post('store', 'Admin\SongController@store')->name('admin.store');
 Route::get('edit/{id}', 'Admin\SongController@edit')->name('admin.edit');
 Route::post('destroy/{id}', 'Admin\SongController@destroy')->name('admin.destroy');
 Route::post('update/{id}', 'Admin\SongController@update')->name('admin.update');
});
