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

// Route::get('/', function () {
//     return view('frontend.index');
// });

// Frontend
Route::get('/', 'SiteController@index')->name('indexpage');
Route::get('/lang/{lang}', 'SiteController@setLang');
Route::get('/news/{id?}', 'SiteController@news');
Route::get('/contacts', 'SiteController@contacts');
Route::get('/mass-media-about-us', 'SiteController@massMedia');
Route::get('/galleries/{id?}', 'SiteController@gallery');
Route::get('/our-projects', 'SiteController@projects');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index')->name('home');

//Backend
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::resource('contacts', 'ContactController');
	Route::resource('menus', 'MenuController');
	Route::resource('requisites', 'RequisiteController');
	Route::resource('allNews', 'allNewController');
	Route::resource('galleries', 'GalleryController');
	Route::resource('massMediaAboutuses', 'massMediaAboutUsController');
	Route::resource('projects', 'ProjectController');
	Route::resource('testmenus', 'testmenuController');
});