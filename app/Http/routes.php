<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/baoxiu', 'BaoxiuController@index');
Route::get('/baoxiu/querynews', 'BaoxiuController@querynews');
Route::post('/baoxiu', 'BaoxiuController@store');

Route::get('/network/status', 'NetworkController@index');
Route::post('/network/status', 'NetworkController@store');

Route::get('/network/news', 'Network\NewsController@index');
Route::get('/network/news/add', 'Network\AddNewsController@index');
Route::post('/network/news/add', 'Network\AddNewsController@store');
Route::get('/network/talk','Network\TalkController@index');

Route::auth();
//Route::get('/home', 'HomeController@index');
 