<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPasswordController;

Route::get('/', function () {
    return view('home');
});

// ========================認証系========================
Route::post('/register','RegisterController@register')->name('register');
Route::get('/logout','LoginController@logout');
Route::post('/login','LoginController@login')->name('login');
Route::get('/passwordReset', function () {
    return view('/password/passwordReminder');
});
Route::post('/passwordReset','ResetPasswordController@resetPassword')->name('passwordReset');
Route::get('/passRemindReceive', function () {
    return view('/password/passRemindReceive');
});
Route::get('/myPage/{id}', function () {
    return view('myPage');
});
