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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});


// 課題13番
// 2.【応用】 routes/web.php を編集して、
// に postメソッドでアクセスしたら
// ProfileController の create Action に
// 割り当てるように設定してください。

Route::post('admin/profile/create','Admin\ProfileController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
