<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {

        Route::match(['get', 'post'], '/setting', 'Setting\HotelSettingController@index')
        ->name('app_hotel_setting');

        Route::prefix('room')->group(function () {
            Route::match(['get', 'post'], '/create', 'Room\CreateController@index')
                ->name('room_create');
    
            Route::get('/', 'Room\ListController@index')
                ->name('room_list');
            
        });

    });

    # SUPER ADMIN ONLY
    Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function() {

        Route::get('/locale/{locale}', 'LocaleController@index')->where(['locale' => "[a-z]{0,2}"]);
    });
});
