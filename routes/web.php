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


//Customer dashboard(Login/signup)
Route::get('/customer-login', 'Frontend\CheckoutController@customerLogin')->name('customer.login');
Route::get('/customer-signup', 'Frontend\CheckoutController@customersignup')->name('customer.signup');




Auth::routes();







//Backend routes-------------------------------------------------------------------------------------------

Route::get('/home', 'HomeController@index')->name('home');

    //Manage user routes
	Route::prefix('users')->group(function(){

		Route::get('/view','Backend\UserController@view')->name('users.view');
		Route::get('/add','Backend\UserController@add')->name('users.add');
		Route::post('/store','Backend\UserController@store')->name('users.store');
		Route::get('/edit/{id}','Backend\UserController@edit')->name('users.edit');
		Route::post('/update/{id}','Backend\UserController@update')->name('users.update');
		Route::get('/delete/{id}','Backend\UserController@delete')->name('users.delete');
	});

	//Manage profile routes
	Route::prefix('profiles')->group(function(){

		Route::get('/view','Backend\ProfileController@view')->name('profiles.view');
		Route::get('/edit','Backend\ProfileController@edit')->name('profiles.edit');
		Route::post('/update','Backend\ProfileController@update')->name('profiles.update');
		Route::get('/change/password','Backend\ProfileController@changePassword')->name('profiles.password.change');
		Route::post('/update/password','Backend\ProfileController@updatePassword')->name('profiles.password.update');
	});

	//Logo management routes
	Route::prefix('logos')->group(function(){

		Route::get('/view','Backend\LogoController@view')->name('logos.view');
		Route::get('/add','Backend\LogoController@add')->name('logos.add');
		Route::post('/store','Backend\LogoController@store')->name('logos.store');
		Route::get('/edit/{id}','Backend\LogoController@edit')->name('logos.edit');
		Route::post('/update/{id}','Backend\LogoController@update')->name('logos.update');
		Route::get('/delete/{id}','Backend\LogoController@delete')->name('logos.delete');
	});

	//Slider management routes
	Route::prefix('sliders')->group(function(){

		Route::get('/view','Backend\SliderController@view')->name('sliders.view');
		Route::get('/add','Backend\SliderController@add')->name('sliders.add');
		Route::post('/store','Backend\SliderController@store')->name('sliders.store');
		Route::get('/edit/{id}','Backend\SliderController@edit')->name('sliders.edit');
		Route::post('/update/{id}','Backend\SliderController@update')->name('sliders.update');
		Route::get('/delete/{id}','Backend\SliderController@delete')->name('sliders.delete');
	});

	//Contact routes
	Route::prefix('contacts')->group(function(){

		Route::get('/view','Backend\ContactController@view')->name('contacts.view');
		Route::get('/add','Backend\ContactController@add')->name('contacts.add');
		Route::post('/store','Backend\ContactController@store')->name('contacts.store');
		Route::get('/edit/{id}','Backend\ContactController@edit')->name('contacts.edit');
		Route::post('/update/{id}','Backend\ContactController@update')->name('contacts.update');
		Route::get('/delete/{id}','Backend\ContactController@delete')->name('contacts.delete');
		Route::get('/view/communicate','Backend\ContactController@viewCommunicate')->name('contacts.communicate');
		Route::get('/delete/communicate/{id}','Backend\ContactController@deleteCommunicate')->name('communicates.delete');
	});

	//About us routes
	Route::prefix('abouts')->group(function(){

		Route::get('/view','Backend\AboutController@view')->name('abouts.view');
		Route::get('/add','Backend\AboutController@add')->name('abouts.add');
		Route::post('/store','Backend\AboutController@store')->name('abouts.store');
		Route::get('/edit/{id}','Backend\AboutController@edit')->name('abouts.edit');
		Route::post('/update/{id}','Backend\AboutController@update')->name('abouts.update');
		Route::get('/delete/{id}','Backend\AboutController@delete')->name('abouts.delete');
	});

	//Add new locations
	Route::get('/add/new/location', 'Backend\AddNewLocationController@addNewLocation')->name('add.newlocation');

	//Add new hotels
	Route::get('/add/new/hotel', 'Backend\AddNewHotelController@addNewHotel')->name('add.newhotel');

	//New post requests
	Route::get('/new/post/request', 'Backend\NewPostRequestController@newPostRequest')->name('post.request');
