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
//     return view('welcome');
// });

// Route::get('/test','happypageController@index')->name('index');
Route::view('/home','pages.inicio')->name('home');
Route::view('/contact','pages.contact') -> name('contact');
Route::view('/vacations','pages.vacations')->name('vacations');