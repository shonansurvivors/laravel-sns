<?php

Auth::routes();
Route::get('/', 'ArticleController@index');
Route::resource('/articles', 'ArticleController');