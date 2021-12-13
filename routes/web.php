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

// ログイン不要ページ
Route::get('/','BookController@index')->name('home');
Route::post('/','BookController@index')->name('home');
Route::get('/book','BookController@home')->name('book.home');
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login');
Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register','Auth\RegisterController@register');
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/new','BookController@new')->name('book.new');
Route::get('/book/sold-out','BookController@soldOuts')->name('book.soldOuts'); //なんのために必要？
Route::get('/book/search','BookController@search')->name('search');
Route::post('/book/search','BookController@search');

// ログイン後ページ
Route::middleware('auth')->group(function () {
Route::get('/book/create','BookController@create')->name('book.create');
Route::post('/book/create','BookController@create');
Route::post('/book/store','BookController@store')->name('book.store'); //なんの機能？
Route::get('/book/{book}','BookController@show')->name('book.show');
Route::get('/book/{book}/edit','BookController@edit')->name('book.edit');
Route::put('/book/{book}/update','BookController@update')->name('book.update');
Route::get('/shop/edit','UserController@edit')->name('shop.edit');
Route::put('/shop/update','UserController@update')->name('shop.update');
Route::get('/mail/create','MailController@create')->name('mail.create');
Route::post('/mail/store','MailController@store')->name('mail.store');
Route::get('/mail/index','MailController@index')->name('mail.index');
Route::post('/mail/update/{mail}','MailController@update')->name('mail.update');
Route::get('/mail/return','MailController@returns')->name('mail.returns');
});

Route::get('/shop/{shop}','UserController@show')->name('shop.show');