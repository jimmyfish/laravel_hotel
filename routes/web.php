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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::prefix('room')->group(function () {
        Route::match(['get', 'post'], '/create', 'Room\CreateController@index');

        Route::get('/', 'Room\ListController@index');
    });

    # Grouping super admin privileges
    Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function() {

        Route::get('/superadmin', 'SuperAdmin\HotelSettingController@index');

        Route::match(['get', 'post'], '/setting', 'Setting\HotelSettingController@index')
        ->name('app_hotel_setting');

        Route::get('/locale/{locale}', 'LocaleController@index')->where(['locale' => "[a-z]{0,2}"]);
    });

});
