<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPasswordController;

Route::get('/', function () {
    return view('home');
});

Route::post('/register','RegisterController@register')->name('register');
Route::get('/logout','LoginController@logout');
Route::post('/login','LoginController@login')->name('login');

Route::get('/passwordReset', function () {
    return view('/password/passwordReminder');
})->name('passwordReset');

Route::post('/passwordReset','ResetPasswordController@resetPassword')->name('passwordReset');
Route::post('/passRemindReceive','PassRemindReceiveController@passRemindReceive')->name('passRemindReceive');

Route::get('/myPage/{id}', function () {
    return view('myPage');
});

//リンク先にログインユーザーのid属性を持たせる。
Route::get('/profileEdit/{id?}', function () {
    return view('/profileEdit');
});
Route::post('/profileEdit','profileEditController@profileEditAction')->name('profileEdit');;

// ルートを実行する際に行いたい処理を
// Route::group([‘middleware’ => ‘check’],function(){
// });
