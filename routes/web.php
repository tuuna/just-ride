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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','IndexController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/artlist/{id}','ArtlistController@index');

Route::get('/single/{id}','ArticleController@show');

Route::get('/image','ImageListController@index');

Route::get('/page','PageController@index');

Route::get('items-lists', ['as'=>'items-lists','uses'=>'ItemSearchController@index']);
Route::post('create-item', ['as'=>'create-item','uses'=>'ItemSearchController@create']);

Route::get('email/verify/{token}',['as' => 'email.verify', 'uses' => 'EmailController@verify']);

Route::get('/write','WriteArticleController@index');

Route::post('/write/new','WriteArticleController@new');