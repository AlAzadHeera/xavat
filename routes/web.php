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

Route::get('/','FrontController@index');
Route::get('about','FrontController@about');
Route::get('service','FrontController@service');
Route::get('portfolio','FrontController@portfolio');
Route::get('contact','FrontController@contact');
Route::get('team','FrontController@team');
Route::post('storeSubscriber','FrontController@storeSubscriber');

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    Route::resource('team','TeamController');
    Route::resource('portfolio','PortfolioController');
    Route::resource('category','CategoryController');
    Route::resource('testimonial','SayController');
    Route::resource('partner','PartnerController');
    Route::resource('subscribe','SubscriberController');
});
