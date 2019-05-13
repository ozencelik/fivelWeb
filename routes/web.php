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


Route::get('/', function () {
	    return view('welcome');
	})->name('home');
	
	
	


Route::group(['middleware' => ['guest']], function(){
	
	///////////////////////////////////////////////

	Route::get('/signup', [
		'uses' => 'UserController@getSignUp',
		'as' => 'signup'
	]);

	Route::post('/signup', [
		'uses' => 'UserController@postSignUp',
		'as' => 'signup'
	]);

	///////////////////////////////////////////////

	Route::get('/signin', [
		'uses' => 'UserController@getSignIn',
		'as' => 'signin'
	]);

	Route::post('/signin', [
		'uses' => 'UserController@postSignIn',
		'as' => 'signin'
	]);

	///////////////////////////////////////////////
	

	Route::get('/about', [
		'uses'=> 'Controller@getAbout',
		'as' => 'about'
	]);

	Route::get('/portfolio', [
		'uses'=> 'ProductController@getProduct',
		'as' => 'portfolio'
	]);

	Route::get('/portfolio-single', [
		'uses'=> 'ProductController@getPortfolioSingle',
		'as' => 'portfolio-single'
	]);

	Route::get('/news', [
		'uses'=> 'Controller@getNews',
		'as' => 'news'
	]);

	Route::get('/single-news', [
		'uses'=> 'Controller@getSingleNews',
		'as' => 'single-news'
	]);

	Route::get('/contact', [
		'uses'=> 'Controller@getContact',
		'as' => 'contact'
	]);

});

Route::group(['middleware' => ['auth']], function(){
	
	Route::get('/logout', [
		'uses' => 'UserController@getLogout',
		'as' => 'logout'
	]);


	Route::get('/dashboard', [
		'uses'=> 'Controller@getDashboard',
		'as' => 'dashboard'
	]);

	///////////////////////////////////////////////

	Route::get('/portal', [
		'uses' => 'MovementController@getMovement',
		'as' => 'portal'
	]);

	Route::post('/portal', [
		'uses' => 'MovementController@postMovement',
		'as' => 'portal'
	]);


});