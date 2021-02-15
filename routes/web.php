<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('/', function () {
    return view('home');
});

// ========================認証系========================
Route::post('/register','RegisterController@register')->name('register');
Route::post('/login','LoginController@login')->name('login');
Route::get('/logout','LoginController@logout')->name('logout');
Route::get('/myPage/{id}', function () {
    return view('myPage');
});
Route::get('/passwordReminder', function () {
    return view('/password/passwordReminder');
});
