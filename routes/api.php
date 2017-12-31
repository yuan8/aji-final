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

	Route::get('post-city/{city_id?}/{sorting?}','API\v1\PostCtrl@indexCity');
	Route::get('post-national/{sorting?}','API\v1\PostCtrl@indexNational');
	
	Route::post('post-like','API\v1\PostLikeCtrl@store');

	Route::post('comment','API\v1\PostCommentCtrl@store');

	Route::post('setting-about','API\v1\SettingAboutController@setting');

	Route::resource('profile','API\v1\UserCtrl');

	Route::get('event-reservation','API\v1\EventReservationCtrl@index');


	Route::resource('event','API\v1\EventCtrl');

	Route::resource('post','API\v1\PostCtrl');

	Route::get('my-post','API\v1\MyPostCtrl@index');

	Route::get('city-list-view','API\v1\CityCtrl@indexListView');





});



Route::middleware(['guest'])->prefix('v1')->group(function () {
	
	Route::get('city','API\v1\CityCtrl@index');

	Route::post('get-token','API\v1\AccessCtrl@getToken');
	Route::post('register','API\v1\AccessCtrl@register');


});

