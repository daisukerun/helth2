<?php
Route ::get('/home','HelthController@index');
Route::post('helth/keisan','HelthController@post');
Route::get('date/date','HelthController@add');
Route::post('date/date','HelthController@create');
