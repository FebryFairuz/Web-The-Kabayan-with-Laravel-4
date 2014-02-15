<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/', 'HomesController');
/*Route::get('/', function()
{
	return View::make('content.home');
});
*/
Route::resource('profile', 'ProfilesController');
/*Route::get('profile', function(){
	return View::make('content.profile');
});*/


/*Route::get('testimonial', function(){
	return View::make('content.testimonial');
});
*/

Route::resource('testimonial', 'TestimonialsController');

Route::resource('highscore', 'PemainsController');

/*Route::get('highscore', function(){
	return View::make('content.highscore');
});*/