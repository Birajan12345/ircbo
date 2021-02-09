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

Route::get('/lang/{slug}', 'FrontendController@setLanguage');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();


//Route::get('/this','PhotoController@photo')->name('photo');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('setting', 'SettingController@index')->name('setting.index');
    Route::put('setting/update', 'SettingController@update')->name('setting.update');

    /*
        |--------------------------------------------------------------------------
        | Backend Menu CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'home.', 'prefix' => 'home'], function () {
        Route::get('', 'HomeController@index')->name('home');
        Route::get('create', 'HomeController@create')->name('create');
        Route::post('', 'HomeController@store')->name('store');
    });

    Route::group(['as' => 'menu.', 'prefix' => 'menu'], function () {
        Route::get('', 'MenuController@index')->name('index');
        Route::get('/indexnp', 'MenuController@indexnp')->name('indexnp');
        Route::post('', 'MenuController@store')->name('store');
        Route::put('', 'MenuController@update')->name('update');
        Route::delete('{menu}', 'MenuController@destroy')->name('destroy');

        Route::group(['as' => 'subMenu.'], function () {
            Route::post('{menu}/subMenu', 'MenuController@storeSubMenu')->name('store');
            Route::delete('{menu}/subMenu/{subMenu}', 'MenuController@destroySubMenu')->name('destroy');
            Route::get('{menu}/subMenuModal', 'MenuController@subMenuModal')->name('component.modal');

            Route::group(['as' => 'childsubMenu.'], function () {
                Route::post('{subMenu}/subMenu/childsubMenu', 'MenuController@storeChildSubMenu')->name('store');
                Route::delete('{menu}/subMenu/{subMenu}/childsubMenu/{childSubMenu}', 'MenuController@destroyChildSubMenu')->name('destroy');
                Route::get('{subMenu}/subMenu/childsubMenuModal', 'MenuController@childsubMenuModal')->name('component.modal');
            });
        });
    });

    /*
        |--------------------------------------------------------------------------
        | Page CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'page.', 'prefix' => 'page'], function () {
        Route::get('', 'PageController@index')->name('index');
        Route::get('create', 'PageController@create')->name('create');
        Route::post('', 'PageController@store')->name('store');
        Route::get('{page}', 'PageController@show')->name('show');
        Route::get('{page}/edit', 'PageController@edit')->name('edit');
        Route::put('{page}', 'PageController@update')->name('update');
        Route::delete('{page}', 'PageController@destroy')->name('destroy');
    });

    /*
     |--------------------------------------------------------------------------
     | Image Controller
     |--------------------------------------------------------------------------
      */
    Route::group(['as' => 'photo.', 'prefix' => 'photo'], function () {
        Route::get('', 'PhotoController@index')->name('index');
        Route::get('create', 'PhotoController@create')->name('create');
        Route::post('', 'PhotoController@store')->name('store');
        Route::put('{photo}', 'PhotoController@update')->name('update');
        Route::get('{photo}/edit', 'PhotoController@edit')->name('edit');
        Route::delete('{photo}', 'PhotoController@delete')->name('destroy');
    });

    /*
     |--------------------------------------------------------------------------
     | Homepage Slider CRUD Routes
     |--------------------------------------------------------------------------
     */
    Route::group(['as' => 'slider.', 'prefix' => 'slider'], function () {
        Route::get('', 'SliderController@index')->name('index');
        Route::get('create', 'SliderController@create')->name('create');
        Route::post('', 'SliderController@store')->name('store');
        Route::put('/update', 'SliderController@update')->name('update');
        Route::delete('{id}', 'SliderController@destroy')->name('destroy');

    });

    /*
    |--------------------------------------------------------------------------
    | Event CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['as' => 'event.', 'prefix' => 'event'], function () {
        Route::get('', 'EventController@index')->name('index');
        Route::get('create', 'EventController@create')->name('create');
        Route::post('', 'EventController@store')->name('store');
        Route::get('{event}/edit', 'EventController@edit')->name('edit');
        Route::put('{event}', 'EventController@update')->name('update');
        Route::delete('{event}', 'EventController@destroy')->name('destroy');
    });

    /*
        |--------------------------------------------------------------------------
        | Service CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'service.', 'prefix' => 'service'], function () {
        Route::get('', 'ServiceController@index')->name('index');
        Route::get('create', 'ServiceController@create')->name('create');
        Route::post('', 'ServiceController@store')->name('store');
        Route::get('{services}/edit', 'ServiceController@edit')->name('edit');
        Route::put('{services}', 'ServiceController@update')->name('update');
        Route::delete('{service}', 'ServiceController@destroy')->name('destroy');
    });

    Route::group([ 'as' => 'document.', 'prefix' => 'document' ], function () {
        Route::get('', 'DocumentController@index')->name('index');
        Route::get('create', 'DocumentController@create')->name('create');
        Route::post('store', 'DocumentController@store')->name('store');
        Route::put('{document}', 'DocumentController@update')->name('update');
        Route::get('{document}/edit', 'DocumentController@edit')->name('edit');
        Route::delete('{document}', 'DocumentController@destroy')->name('destroy');
        Route::put('{document}/publish', 'DocumentController@publishUpdate')->name('publish');
    });


    Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

});



//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Frontend Controller
|--------------------------------------------------------------------------
*/


Route::get('', 'FrontendController@homepage')->name('homepage');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/consulting', 'FrontendController@consulting')->name('consulting');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/events/{slug?}', 'FrontendController@events')->name('events');
Route::get('/managementSystemStandard', 'FrontendController@managementSystemStandard')->name('managementSystemStandard');
Route::get('/messageFromIrcbo', 'FrontendController@messageFromIrcbo')->name('messageFromIrcbo');
Route::get('/outsourcing', 'FrontendController@outsourcing')->name('outsourcing');
Route::get('/qualityManagementSystem', 'FrontendController@qualityManagementSystem')->name('qualityManagementSystem');
Route::get('/software', 'FrontendController@software')->name('software');
Route::get('/solution', 'FrontendController@solution')->name('solution');
Route::get('/training', 'FrontendController@training')->name('training');
Route::get('/webinars', 'FrontendController@webinars')->name('webinars');
