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
use App\Cities;


Route::middleware(['guest'])->group(function () {
	Route::post('login','Auth\LoginController@login');

	Route::post('register','Auth\RegisterController@register');
	Route::get('login',function(){
		return View('pages/login.login');
	})->name('login');

	
	Route::get('register',function(){
		$cities=Cities::all();
		return View('pages/register.register')->with('cities',$cities);
	});


	Route::get('/', function () {
		return redirect('login');
	});


});

Route::get('/test/test',function(){
		return Carbon\Carbon();
	});

Route::middleware(['auth'])->group(function () {

	Route::get('/home/{sorting}/{id_city?}/{city?}','Pages\HomeController@index');
	Route::get('/home','Pages\HomeController@index');

	Route::post('/post-comment','PostCommentsController@store');
	Route::get('/my-profile','Pages\MyProfileController@index');

	Route::get('/user/{user_id}/show/timeline','Pages\ProfileController@timeline');
	Route::get('/user/{user_id}/show/photos','Pages\ProfileController@photos');

	Route::post('/user/photos','UserPictureController@store');
	Route::get('/search','Pages\SearchController@search');


	


	Route::post('/logout','Auth\LoginController@logout')->name('logout');


    // post
	Route::post('/post','PostsController@store');



	Route::get('user/{id}/message', function () {
		return View('pages.message.message');
	});

	Route::get('user/{id}/setting','Pages\SettingController@index');

	Route::get('user/{id}/show/activity', function () {
		return View('pages.log.log');
	});


	Route::get('user/{id}/show/fee', function () {
		return View('pages.iuran.iuran');
	});


	Route::get('test', function () {
		return View('pages.setting.setting');
	});



	Route::get('user/{id}/show/event-history','Pages\EventHistoryController@index');

	Route::get('board', function () {
		return View('pages.board.board');
	});

	Route::get('events','Pages\EventController@index');

	Route::get('user/{id}/notification', function () {
		return View('pages.notification.notification');
	});
	Route::get('user/{id}/message', function () {
		return View('pages.message.message');
	});

	Route::get('user/{id}/about-edit', function () {
		return View('pages.profile.about-edit');
	});
	Route::post('user/update/about', 'UserController@editAbout');

	Route::post('user/upload/avatar', 'UserController@chengeAvatar');
	Route::post('event/joined', 'EventReservationsController@store');


	





});



