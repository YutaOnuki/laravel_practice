<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WelcomeController@index');
Route::get('contact', 'PagesController@contact');
Route::get('about',   'PagesController@about');