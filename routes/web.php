<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/callback/form', 'CallbackFormController@postIndex');
Route::post('/kontakti/form', 'ContactFormController@postIndex');
Route::post('/', 'SubscribeController@postIndex');
Route::post('/{url}', 'SubscribeController@postIndex');

Route::get('/blog/{url}', 'PostItemController@getIndex');
Route::get('/blog', 'PostController@getIndex');
Route::get('/kontakti', 'ContactController@getIndex');
Route::get('/portfolio', 'GalleryController@getIndex');
Route::get('/portfolio/{url}', 'GalleryPostController@getIndex');
Route::get('/uslugi/{url}', 'ServiceJobController@getIndex');
Route::get('/uslugi', 'ServiceController@getIndex');
Route::get('/', 'BaseController@getIndex');
Route::get('/{url}', 'CategoryController@getIndex');

