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

Route::resource('article', 'ArticleController');
Route::resource('ucenik', 'UcenikController');
Route::resource('skola', 'SkolaController');
Route::resource('profesor', 'ProfesorController');
Route::resource('biblioteka', 'BibliotekaController');
Route::resource('knjiga', 'KnjigaController');
Route::resource('dogadjaj', 'DogadjajController');




Route::get('test', function () {
    return view('articles.test');
});

Route::resource('skola.napomena', 'NapomenaController', [
    'only' => ['store', 'create', 'destroy']
]);

Route::get('skola/{skola}/napomena/edit', 'NapomenaController@edit')->name('skola.napomena.edit');


