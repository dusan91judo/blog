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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mail', 'MailController@mail')->name('mail');

Route::resource('article', 'ArticleController', ['only' => ['index', 'create', 'store']]);
Route::resource('ucenik', 'UcenikController', ['only' => ['index', 'create', 'store']]);
