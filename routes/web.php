<?php

// RouteクラスとAuthクラスは名前空間での指定がいらない。
// https://kohkimakimoto.hatenablog.com/entry/2014/01/17/153750

// public function auth(array $options = [])
// {
//     // Authentication Routes...
//     $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//     $this->post('login', 'Auth\LoginController@login');
//     $this->post('logout', 'Auth\LoginController@logout')->name('logout');

//     // Registration Routes...
//     if ($options['register'] ?? true) {
//         $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//         $this->post('register', 'Auth\RegisterController@register');
//     }

//     // Password Reset Routes...
//     if ($options['reset'] ?? true) {
//         $this->resetPassword();
//     }

//     // Email Verification Routes...
//     if ($options['verify'] ?? false) {
//         $this->emailVerification();
//     }
// }


// 認証系の物の物を一括で行う。
//vendor/laravel/framework/src/Illuminate/Routing/Router.phpで
//定義されたルーティングが読み込まれている。
Auth::routes();

use App\Http\Controllers\DrillsController;

Route::get('/', function () {
    return view('child');
});

Route::get('/drills/new','DrillsController@new')->name('drills.new');
Route::post('/drills','DrillsController@create')->name('drills.create');
Route::get('/drills','DrillsController@index')->name('drills');
Route::get('/drills/{id}/edit','DrillsController@edit')->name('drills.edit');
Route::post('/drills/{id}','DrillsController@update')->name('drills.update');
Route::post('/drills/{id}/delete','DrillsController@destroy')->name('drills.delete');
Route::get('/drills/{id}','DrillsController@show')->name('drills.show');

Auth::routes();
