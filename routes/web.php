<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WelcomeController@index');
Route::get('layout', 'WelcomeController@layout');
Route::get('contact', 'PagesController@contact');
Route::get('about',   'PagesController@about');
