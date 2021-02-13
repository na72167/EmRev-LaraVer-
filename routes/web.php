<?php

use App\Http\Controllers\DrillsController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});

Route::get('/drills/new','DrillsController@new')->name('drills.new');
Route::post('/drills','DrillsController@create')->name('drills.create');



// ========================認証系========================
Route::post('/login','LoginController@login');
Route::post('/logout','LoginController@logout')->name('logout');
Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
Route::get('/register','RegisterController@showRegistrationForm')->name('register');
Route::post('/register','RegisterController@register');
