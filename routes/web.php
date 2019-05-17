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

// 管理者ログイン
Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login');
// ログアウト
Route::post('/logout', 'LoginController@logout')->name('logout');

// 項目の作成
Route::post('/gag', 'GagController@create');
// 項目の詳細
Route::get('/gag/{id}', 'GagController@show');
// 項目の更新
Route::post('/gag/{id}', 'GagController@update');
// 項目の削除
Route::post('/gag/{id}/delete', 'GagController@delete');

// ログの閲覧
Route::get('/log', 'LogController@index')->name('log');
