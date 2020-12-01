<?php

use Illuminate\Support\Facades\Route;



//Frontend routes---------------------------------------------------------------------------------------
Route::get('/', 'Frontend\FrontendController@index');

//Division wise locaiton view			
Route::get('/location-division/{division_id}', 'Frontend\FrontendController@divisionWiseLocationList')
			->name('division.wise.location');

//Customer(log in/signup/email verification)
Route::get('/customer-login', 'Frontend\CheckoutController@customerLogin')->name('customer.login');
Route::get('/customer-signup', 'Frontend\CheckoutController@customersignup')->name('customer.signup');
Route::post('/customer-signup-store', 'Frontend\CheckoutController@signupStore')->name('signup.store');
Route::get('/customer-email-verify', 'Frontend\CheckoutController@emailVerify')->name('email.verify');
Route::post('/verification-store', 'Frontend\CheckoutController@storeVerification')->name('store.verification');

//About us and contact us
Route::get('/about-us', 'Frontend\FrontendController@aboutUs')->name('about.us');

Route::get('/contact-us', 'Frontend\CustomerContactController@contactUs')->name('contact.us');
Route::post('/contact-store', 'Frontend\CustomerContactController@contactStore')->name('contact.store');



Auth::routes();

//Customer profile
Route::group(['middleware'=> ['auth','customer']], function(){


	Route::get('/customer-profile', 'Frontend\CustomerProfileController@customerProfile')
				->name('customerprofiles.view');

	Route::get('/customer-edit-profile','Frontend\CustomerProfileController@editProfile')
				->name('customerprofiles.edit');

	Route::post('/customer-update-profile','Frontend\CustomerProfileController@updateProfile')
				->name('customerprofiles.update');

	Route::get('/customer-change-password','Frontend\CustomerProfileController@changeCustomerPassword')
				->name('customer.change.password');

	Route::post('/customer-update-password', 'Frontend\CustomerProfileController@updateCustomerPassword')
	           ->name('customer.password.update');


	//Customer profile routes
	Route::prefix('customer')->group(function(){

	    //Customer post
		Route::get('/view-post','Frontend\CustomerPostController@viewPost')->name('posts.view');

		Route::get('/add-post','Frontend\CustomerPostController@addPost')->name('customer.add.post');

		Route::post('/store-post','Frontend\CustomerPostController@storePost')
					->name('customer.store.post');

		Route::get('/edit-post/{id}','Frontend\CustomerPostController@editPost')
					->name('customer.edit.post');

		Route::post('/update-post/{id}','Frontend\CustomerPostController@updatePost')
					->name('customer.update.post');

		Route::get('/delete-post/{id}','Frontend\CustomerPostController@deletePost')
					->name('customer.delete.post');

		// Customer event
		Route::get('/view-event','Frontend\CustomerEventController@viewEvents')->name('events.view');

		Route::get('/create-event','Frontend\CustomerEventController@createEvent')
				->name('customer.create.event');

		Route::post('/store-event','Frontend\CustomerEventController@storeEvent')
					->name('customer.store.event');

		Route::get('/edit-event/{id}','Frontend\CustomerEventController@editEvent')
					->name('customer.edit.event');

		Route::post('/update-event/{id}','Frontend\CustomerEventController@updateEvent')
					->name('customer.update.event');

		Route::get('/delete-event/{id}','Frontend\CustomerEventController@deleteEvent')
					->name('customer.delete.event');

	});





	//Home page (Location, location details, category view)
	Route::get('/location-list', 'Frontend\FrontendController@locationList')->name('locations.list');
	Route::get('/location-category/{category_id}', 'Frontend\FrontendController@categoryWiseLocationList')
					->name('category.wise.location');
	Route::get('/location-details/{slug}', 'Frontend\FrontendController@locationDetails')
					->name('location.details.info');

	//Tour event----------------------------------------------------------------------------
	//Navbar menu
	Route::get('/tour-event', 'Frontend\FrontendController@tourEvent')->name('tour.events');

	Route::get('/tour-event-details/{slug}', 'Frontend\FrontendController@tourEventDetails')
					->name('tour.event.details');

});








//Backend routes------------------------------------------------------------------------------

Route::group(['middleware'=>['auth','admin'] ], function(){

//Admin dashboard
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
		//Communicate customer
		Route::get('/view/communicate','Backend\ContactController@viewCommunicate')->name('contacts.communicate');

		Route::get('/reply/communicate','Backend\ContactController@replyCommunicate')
					->name('communicates.reply');

		Route::get('/delete/communicate/{id}','Backend\ContactController@deleteCommunicate')
					->name('communicates.delete');
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

	//Division routes
	Route::prefix('divisions')->group(function(){

		Route::get('/view','Backend\DivisionController@view')->name('divisions.view');
		Route::get('/add','Backend\DivisionController@add')->name('divisions.add');
		Route::post('/store','Backend\DivisionController@store')->name('divisions.store');
		Route::get('/edit/{id}','Backend\DivisionController@edit')->name('divisions.edit');
		Route::post('/update/{id}','Backend\DivisionController@update')->name('divisions.update');
		Route::get('/delete/{id}','Backend\DivisionController@delete')->name('divisions.delete');
	});

	//Category routes
	Route::prefix('categories')->group(function(){

		Route::get('/view','Backend\CategoryController@view')->name('categories.view');
		Route::get('/add','Backend\CategoryController@add')->name('categories.add');
		Route::post('/store','Backend\CategoryController@store')->name('categories.store');
		Route::get('/edit/{id}','Backend\CategoryController@edit')->name('categories.edit');
		Route::post('/update/{id}','Backend\CategoryController@update')->name('categories.update');
		Route::get('/delete/{id}','Backend\CategoryController@delete')->name('categories.delete');
	});


	//Hotel routes
	Route::prefix('hotels')->group(function(){

		Route::get('/view','Backend\HotelController@view')->name('hotels.view');
		Route::get('/add','Backend\HotelController@add')->name('hotels.add');
		Route::post('/store','Backend\HotelController@store')->name('hotels.store');
		Route::get('/edit/{id}','Backend\HotelController@edit')->name('hotels.edit');
		Route::post('/update/{id}','Backend\HotelController@update')->name('hotels.update');
		Route::get('/delete/{id}','Backend\HotelController@delete')->name('hotels.delete');
	});

	//Location routes
	Route::prefix('locations')->group(function(){

		Route::get('/view','Backend\LocationController@view')->name('locations.view');
		Route::get('/add','Backend\LocationController@add')->name('locations.add');
		Route::post('/store','Backend\LocationController@store')->name('locations.store');
		Route::get('/edit/{id}','Backend\LocationController@edit')->name('locations.edit');
		Route::post('/update/{id}','Backend\LocationController@update')->name('locations.update');
		Route::get('/delete/{id}','Backend\LocationController@delete')->name('locations.delete');
		Route::get('/details/{id}','Backend\LocationController@details')->name('locations.details');
	});

	//Manage customers routes
	Route::prefix('customers')->group(function(){

		Route::get('/view','Backend\CustomerController@view')->name('customers.view');
		Route::get('/draft/view','Backend\CustomerController@draftView')->name('customers.draft.view');
		Route::get('/delete/{id}','Backend\CustomerController@delete')->name('customers.delete');
	});

	//Manage customer post request routes
	Route::prefix('customerspost')->group(function(){

		Route::get('/pending/list','Backend\CustomerPostRequestController@pendingList')
				->name('posts.pending.list');

		Route::get('/approved/list','Backend\CustomerPostRequestController@approvedList')
				->name('posts.approved.list');
				
        Route::get('/post/details/{id}','Backend\CustomerPostRequestController@details')
        		->name('posts.details');

        Route::get('/approve/{id}','Backend\CustomerPostRequestController@approvePost')
        		->name('posts.approve');

        Route::get('/delete/{id}','Backend\CustomerPostRequestController@deletePost')
        		->name('posts.delete');
	});

	//Manage customer event request routes
	Route::prefix('customersevent')->group(function(){

        //Event requests
        Route::get('/pending/list','Backend\CustomerEventRequestController@pendingEventList')
				->name('events.pending.list');	

		Route::get('/approved/list','Backend\CustomerEventRequestController@approvedEventList')
				->name('events.approved.list');

		Route::get('/details/{id}','Backend\CustomerEventRequestController@details')
        		->name('events.details');

        Route::get('/approve/{id}','Backend\CustomerEventRequestController@approveEvent')
        		->name('events.approve');

        Route::get('/delete/{id}','Backend\CustomerEventRequestController@deleteEvent')
        		->name('events.delete');
	});



//Auth-admin
});