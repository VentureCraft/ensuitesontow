<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'site.index', 'uses' => 'HomeController@showWelcome'));
Route::get('contact-us', array('as' => 'contact', 'uses' => 'ContactController@index'));


Route::get('benefits', array('as' => 'benefits', 'uses' => 'ContentController@benefits'));
Route::get('about-us', array('as' => 'about-us', 'uses' => 'ContentController@aboutUs'));
Route::get('alliances-partners', array('as' => 'alliances', 'uses' => 'ContentController@alliances'));
Route::get('features', array('as' => 'features', 'uses' => 'ContentController@features'));
Route::get('hire-franchise-opportunity', array('as' => 'franchise', 'uses' => 'ContentController@franchise'));
Route::get('testimonials', array('as' => 'testimonials', 'uses' => 'ContentController@testimonials'));

Route::get('search', array('as' => 'search', 'uses' => 'ContentController@alliances'));
Route::post('search', array('as' => 'search', 'uses' => 'ContentController@alliances'));