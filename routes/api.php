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





Route::middleware(['auth:api'])->prefix('v1')->group(function () {
	
	Route::post('like/{post_id}','API\v1\PostController@likePost');
	Route::post('post/{post_id}/comment/add','API\v1\PostController@commentPost');
	Route::post('setting-about','API\v1\SettingAboutController@setting');



});
