<?php
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/pengguna', 'Auth\LoginController@showPenggunaLoginForm');
Route::get('/regist/admin', 'Auth\RegisterControllerAdmin@showAdminRegisterForm');
Route::get('/register/pengguna', 'Auth\RegisterController@showPenggunaRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/pengguna', 'Auth\LoginController@penggunaLogin');
Route::post('/regist/admin', 'Auth\RegisterControllerAdmin@createAdmin');
Route::post('/register/pengguna', 'Auth\RegisterController@createPengguna');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/pengguna', 'pengguna');
Route::resource('/annView', 'annController');
Route::resource('/dataMaster', 'dataMasterController');
Route::resource('/klasifikasi', 'klasifikasiController');