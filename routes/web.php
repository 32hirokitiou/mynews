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

// // Route::get('/', function () {
// //     return view('welcome');
// });

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    //ユーザーがログインしていないとアクセスできないミドルウェアauth
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    // Route::get('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/edit', 'Admin\NewsController@edit'); // 追記
    Route::post('news/edit', 'Admin\NewsController@update'); // 追記
    //
    Route::get('profile/create','Admin\ProfileController@add');
    Route::post('profile/create','Admin\ProfileController@create');
    Route::get('profile/edit','Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');//kadaituika
    // ,左側がURL　右側がアクションを示す。
    Route::get('news/delete', 'Admin\NewsController@delete');
    Route::get('profile', 'Admin\ProfileController@index');
    
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'NewsController@index');

// 課題13番
// 2.【応用】 routes/web.php を編集して、
// に postメソッドでアクセスしたら
// ProfileController の create Action に
// 割り当てるように設定してください。
// get post の違い



// Route::group(['prefix' => 'admin'], function() {
//     Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
//     Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
//     Route::get('news', 'Admin\NewsController@index')->middleware('auth');
//     Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth'); // 追記
//     Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth'); // 追記
//     Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
    
//     Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
//     Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');
    
//     Route::post('profile/create','Admin\ProfileController@create');
    
// });