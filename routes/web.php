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

Route::get(
    '/index',
    'IndexController@index'
)->name('index.index');

Route::get(
    '/search',
    'IndexController@search'
);

Route::get(
    '/mypage',
    'IndexController@mypage'
);

Route::get(
    '/logout',
    'IndexController@logout'
);

Route::get(
    '/unsubscribe',
    'IndexController@unsubscribe'
);

Route::post(
    '/unsubscribe',
    'UnsubscribeController'
);

Route::get(
    '/unsubscribe',
    'IndexController@unsubscribe'
);

Route::get(
    '/edit/{id}',
    'IndexController@edit'
)->name('edit.index');

Route::get(
    '/detail/{id}',
    'DetailController@index'
)->name('detail.index');

//投稿関係
Route::get(
    '/post',
    'PostController@index'
)->name('post.index');

Route::post(
    '/post',
    'PostController@create'
);

Auth::routes();
