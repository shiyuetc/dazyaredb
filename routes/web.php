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

// ホーム
Route::get('/', 'HomeController@index')->name('home');

// ログの閲覧
Route::get('/log', 'LogController@index')->name('log');

// 項目の詳細
Route::get('/gag/{id}', 'GagController@show');

// 管理者ログイン・ログアウト
Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login');
Route::post('/logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
  // 管理パネル
  Route::get('/admin/register', 'AdminController@index')->name('register');
  Route::post('/admin/register', 'GagController@create');

  // 項目の更新
  Route::post('/gag/{id}', 'GagController@update');
  // 項目の削除
  Route::post('/gag/{id}/destroy', 'GagController@destroy');
});
