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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//Profile CRUD
Route::any('/addprofile','ProfileController@addprofile')->name('profile.add');
Route::any('/editprofile/{id}/edit','ProfileController@edit')->name('profile.edit');
Route::any('/updateprofile/{id}','ProfileController@update')->name('profile.update');
Route::get('/singlemembershow/{id}','ProfileController@show')->name('profile.show');

//Profile
Route::get('/reviewprofile','ProfileController@reviewprofile')->name('profile.review');
Route::get('/memberprofile','ProfileController@memberprofile')->name('profile.member');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
