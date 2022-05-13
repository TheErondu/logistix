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
        use WebDevEtc\ContactEtc\ContactEtcServiceProvider;

Route::group([
    'middleware' => ['web'],
    'prefix' => config('contactetc.contact_us_slug', 'contact-us')],

    function () {

        // default form. You must have an item in /app/ContactEtcForms/ that has its form name set to ContactEtcServiceProvider::DEFAULT_CONTACT_FORM_KEY for this to work!
        $contact_field_group_name = ContactEtcServiceProvider::DEFAULT_CONTACT_FORM_KEY;

        // the contact form:
        Route::get("/", '\WebDevEtc\ContactEtc\Controllers\ContactEtcController@form')
            ->name('contactetc.form.' . $contact_field_group_name)//contactetc.form.main_contact_form
            ->defaults('contactFormId', $contact_field_group_name);

        // processing the submitted data:
        Route::post("/", '\WebDevEtc\ContactEtc\Controllers\ContactEtcController@send')
            ->name('contactetc.send.' . $contact_field_group_name)// contactetc.send.main_contact_form
            ->defaults('contactFormId', $contact_field_group_name);

        // want to add more than one contact form? Don't edit this page! See the docs on https://webdevetc.com/contactetc!
        // you can add as many as needed.
});
        Route::get('/', 'Homepage@index')->name('welcome');

        Route::get('about', 'About@index')->name('about');

        Route::get('careers', 'Careers@index')->name('careers');

        Route::get('contact', 'Contact@index')->name('contact');

        Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

	    Auth::routes(['verify' => true]);

	    Route::get('/customer', 'DashboardController@index')->name('customer')->middleware('auth', 'verified');

        Route::group(['middleware' => ['web'], 'namespace' => '\WebDevEtc\BlogEtc\Controllers'], function () {


    /** The main public facing blog routes - show all posts, view a category, rss feed, view a single post, also the add comment route */
        Route::group(['prefix' => config('blogetc.blog_prefix', 'blog')], function () {

        Route::get('/', 'BlogEtcReaderController@index')
            ->name('blogetc.index');

        Route::get('/search', 'BlogEtcReaderController@search')
            ->name('blogetc.search');

        Route::get('/feed', 'BlogEtcRssFeedController@feed')
            ->name('blogetc.feed'); //RSS feed

        Route::get('/category/{categorySlug}',
            'BlogEtcReaderController@view_category')
            ->name('blogetc.view_category');

        Route::get('/{blogPostSlug}',
            'BlogEtcReaderController@viewSinglePost')
            ->name('blogetc.single');


        // throttle to a max of 10 attempts in 3 minutes:
        Route::group(['middleware' => 'throttle:10,3'], function () {

        Route::post('save_comment/{blogPostSlug}',
                'BlogEtcCommentWriterController@addNewComment')
                ->name('blogetc.comments.add_new_comment');


        });

    });


    /* Admin backend routes - CRUD for posts, categories, and approving/deleting submitted comments */
        Route::group(['prefix' => config('blogetc.admin_prefix', 'blog_admin')], function () {

        Route::get('/', 'BlogEtcAdminController@index')
            ->name('blogetc.admin.index');

        Route::get('/add_post',
            'BlogEtcAdminController@create_post')
            ->name('blogetc.admin.create_post');


        Route::post('/add_post',
            'BlogEtcAdminController@store_post')
            ->name('blogetc.admin.store_post');


          Route::get('/edit_post/{blogPostId}',
            'BlogEtcAdminController@edit_post')
            ->name('blogetc.admin.edit_post');

          Route::patch('/edit_post/{blogPostId}',
            'BlogEtcAdminController@update_post')
            ->name('blogetc.admin.update_post');


            Route::group(['prefix' => "image_uploads",], function () {

            Route::get("/", "BlogEtcImageUploadController@index")->name("blogetc.admin.images.all");

            Route::get("/upload", "BlogEtcImageUploadController@create")->name("blogetc.admin.images.upload");
            
            Route::post("/upload", "BlogEtcImageUploadController@store")->name("blogetc.admin.images.store");

        });


            Route::delete('/delete_post/{blogPostId}',
            'BlogEtcAdminController@destroy_post')
            ->name('blogetc.admin.destroy_post');

            Route::group(['prefix' => 'comments',], function () {

            Route::get('/',
                'BlogEtcCommentsAdminController@index')
                ->name('blogetc.admin.comments.index');

            Route::patch('/{commentId}',
                'BlogEtcCommentsAdminController@approve')
                ->name('blogetc.admin.comments.approve');
            Route::delete('/{commentId}',
                'BlogEtcCommentsAdminController@destroy')
                ->name('blogetc.admin.comments.delete');
        });

            Route::group(['prefix' => 'categories'], function () {

            Route::get('/',
                'BlogEtcCategoryAdminController@index')
                ->name('blogetc.admin.categories.index');

            Route::get('/add_category',
                'BlogEtcCategoryAdminController@create_category')
                ->name('blogetc.admin.categories.create_category');
            Route::post('/add_category',
                'BlogEtcCategoryAdminController@store_category')
                ->name('blogetc.admin.categories.store_category');

            Route::get('/edit_category/{categoryId}',
                'BlogEtcCategoryAdminController@edit_category')
                ->name('blogetc.admin.categories.edit_category');

            Route::patch('/edit_category/{categoryId}',
                'BlogEtcCategoryAdminController@update_category')
                ->name('blogetc.admin.categories.update_category');

            Route::delete('/delete_category/{categoryId}',
                'BlogEtcCategoryAdminController@destroy_category')
                ->name('blogetc.admin.categories.destroy_category');

        });

    });
});

    
    Route::group(['middleware' => 'client'], function() {
 //Truck_requests
    Route::get('truck-requests','Truck_requestController@index')->name('truck_request-index');
    Route::get('truck-request/new','Truck_requestController@create')->name('truck_request-create');
    Route::post('truck-requests','Truck_requestController@store')->name('truck_request-store'); 
    Route::get('truck-requests/{truck_request}/edit','Truck_requestController@edit')->name('truck_request-edit'); 
    Route::patch('truck-requests/{truck_request}','Truck_requestController@update')->name('truck_request-update');
    Route::delete('truck-requests/{truck_request}','Truck_requestController@destroy')->name('truck_request-destroy');
    
    //Bookings
    Route::get('bookings','BookingController@index')->name('booking-index');
    Route::get('bookings/new','BookingController@create')->name('booking-create');
    Route::post('bookings','BookingController@store')->name('booking-store'); 
    Route::get('bookings/{booking}/edit','BookingController@edit')->name('booking-edit'); 
    Route::patch('bookings/{booking}','BookingController@update')->name('booking-update');
    Route::delete('bookings/{booking}','BookingController@destroy')->name('booking-destroy');

});

Route::group(['middleware' => 'trucker'], function() {
    // Truck Crud
    Route::get('trucks','TruckController@index')->name('truck-index');
    Route::get('trucks/create','TruckController@create')->name('truck-create');
    Route::post('trucks','TruckController@store')->name('truck-store'); 
    Route::get('trucks/{truck}/edit','TruckController@edit')->name('truck-edit'); 
    Route::patch('trucks/{truck}','TruckController@update')->name('truck-update');
    Route::get('trucks/{truck}','TruckController@destroy')->name('truck-destroy');

});

Route::group(['middleware' => 'warehouser'], function() {
// Warehouse Crud
    Route::get('warehouses','WarehouseController@index')->name('warehouse-index');
    Route::get('warehouses/create','WarehouseController@create')->name('warehouse-create');
    Route::post('warehouses','WarehouseController@store')->name('warehouse-store'); 
    Route::get('warehouses/{warehouse}/edit','WarehouseController@edit')->name('warehouse-edit'); 
    Route::patch('warehouses/{warehouse}','WarehouseController@update')->name('warehouse-update');
    Route::get('warehouses/{warehouse}','WarehouseController@destroy')->name('warehouse-destroy');

    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
