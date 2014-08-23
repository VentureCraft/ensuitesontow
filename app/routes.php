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
Route::get('alliances', array('as' => 'alliances', 'uses' => 'ContentController@alliances'));