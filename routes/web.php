<?php

Route::get('/', 'IndexController@welcome');

Route::post('/newcomer/new', 'NewcomerController@register');
Route::get('/newcomer/{id}/delete', 'NewcomerController@delete')->middleware('admin');

Route::get('/list', 'ListController@show');

Route::auth();