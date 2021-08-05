<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'User@home');
Route::get('home', 'User@home');
Route::get('berita', 'contentController@berita');
Route::get('profile', 'contentController@profile'); 
Route::get('guru', 'contentController@guru');
Route::get('alumni', 'contentController@alumni');
Route::get('ppdb', 'contentController@ppdb'); 
Route::post('ppdb/store', 'contentController@ppdbStore'); 
Route::get('login', 'User@login');
Route::post('loginPost', 'User@loginPost');
Route::get('register', 'User@register');
Route::post('registerPost', 'User@registerPost');
Route::get('logout', 'User@logout');
Route::get('kontak', 'contentController@kontak');
Route::get('gallery', 'contentController@gallery');
Route::get('beladiri', 'contentController@beladiri');
Route::get('kesiswaan', 'contentController@kesiswaan');
Route::get('koperasi', 'contentController@koperasi');
Route::get('kti', 'contentController@kti');
Route::get('musik', 'contentController@musik');
Route::get('osis', 'contentController@osis');
Route::get('pmr', 'contentController@pmr');
Route::get('pramuka', 'contentController@pramuka');