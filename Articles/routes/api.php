<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List of all articles
Route::get('articles', 'ArticleController@index');

//List single articles
Route::get('article/{id}', 'ArticleController@show');

//Create a new article
Route::post('article', 'ArticleController@store');

//Update an article
Route::put('article', 'ArticleController@store');

//Delete an article
Route::delete('article/{id}', 'ArticleController@destroy');