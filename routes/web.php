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

    Route::prefix('room')->group(function () {
        Route::match(['get', 'post'], '/create', 'Room\CreateController@index');

        Route::get('/', 'Room\ListController@index');
    });

});

Route::get('/locale/{locale}', 'LocaleController@index')->where(['locale' => "[a-z]{0,2}"]);