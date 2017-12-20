<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('beginner', 'BeginnerController@index');
