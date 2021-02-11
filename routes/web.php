<?php

Auth::routes();

use App\Http\Controllers\DrillsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/drills/new','DrillsController@new')->name('drills.new');
Route::post('/drills','DrillsController@create')->name('drills.create');

Auth::routes();
