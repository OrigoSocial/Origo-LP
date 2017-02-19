<?php

Route::get('/', 'IndexController@welcome');

Route::post('/newcomer/new', 'NewcomerController@register');
Route::post('/newcomer/update', 'NewcomerController@update');
Route::get('/newcomer/{id}/delete', 'NewcomerController@delete')->middleware('admin');

Route::get('/list', 'ListController@show');

Route::post('/early-access', 'EarlyAccessController@access');

Route::auth();