<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

//Frontend routes---------------------------------------------------------------------------------------
Route::get('/', 'Frontend\FrontendController@index');
Route::get('/find-bestplace', 'Frontend\FrontendController@find')->name('find.best.places');

//Profile routes---------------------------------------------------------------------
Route::prefix('profiles')->group(function(){

	Route::get('/view','Frontend\UserProfileController@viewProfile')->name('profiles.view');
	Route::get('/edit','Frontend\UserProfileController@editProfile')->name('profiles.edit');
	Route::get('/share-experience','Frontend\UserProfileController@shareExperience')->name('profiles.share.experience');
	Route::get('/create-event','Frontend\UserProfileController@createEvent')->name('profiles.create.event');

});

Route::get('/see-post-details', 'Frontend\FrontendController@seePostDetails')->name('see.post.details');

Route::get('/tour-event', 'Frontend\FrontendController@tourEvent')->name('tour.events');
Route::get('/tour-event-details', 'Frontend\FrontendController@tourEventDetails')->name('tour.event.details');





Auth::routes();





//Backend routes-------------------------------------------------------------------------------------------

Route::get('/home', 'HomeController@index')->name('home');

//Add new locations
Route::get('/add/new/location', 'Backend\AddNewLocationController@addNewLocation')->name('add.newlocation');

//Add new hotels
Route::get('/add/new/hotel', 'Backend\AddNewHotelController@addNewHotel')->name('add.newhotel');

//New post requests
Route::get('/new/post/request', 'Backend\NewPostRequestController@newPostRequest')->name('post.request');
