<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WelcomeController@index');
Route::get('layout', 'WelcomeController@layout');
Route::get('contact', 'PagesController@contact');
Route::get('about',   'PagesController@about');
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit');
Routepatch('articles/{id}', 'ArticlesController@update');
