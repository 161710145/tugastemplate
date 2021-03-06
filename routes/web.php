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
Route::get('gallery', function () {
    return view('gallery');
});
Route::get('paragraph', function () {
    return view('paragraph');
});
Route::get('inspirasi', function () {
    return view('inspirasi');
    });
Route::get('penulis', function () {
    return view('penulis');
    });
Route::get('tabel', 'rizal@rizalpradana');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
