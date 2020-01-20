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

Route::get('/','pageControl@welcome');
Route::get('/addcourse','pageControl@addcourse')->name('addcourse');
Route::post('/addcourse','pageControl@store')->name('addcourse.store');
Route::get('/addstudent','pageControl@addstudent')->name('addstudent');
Route::post('/addstudent','pageControl@studentStore')->name('addstudent.store');
Route::get('/register','pageControl@register')->name('register');
Route::post('/register','pageControl@registerStore')->name('register.store');
