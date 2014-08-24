<?php

Route::get('/', array('as' => 'site.index', 'uses' => 'HomeController@showWelcome'));
Route::get('contact-us', array('as' => 'contact', 'uses' => 'ContactController@index'));

/**
 * Content pages
 */
Route::get('about-us', array('as' => 'about-us', 'uses' => 'ContentController@aboutUs'));
Route::get('alliances-partners', array('as' => 'alliances', 'uses' => 'ContentController@alliances'));
Route::get('benefits', array('as' => 'benefits', 'uses' => 'ContentController@benefits'));
Route::get('builders', array('as' => 'builders', 'uses' => 'ContentController@builders'));
Route::get('events', array('as' => 'events', 'uses' => 'ContentController@events'));
Route::get('fully-featured-portable-bathrooms', array('as' => 'features', 'uses' => 'ContentController@features'));
Route::get('gallery', array('as' => 'gallery', 'uses' => 'ContentController@gallery'));
Route::get('hire-franchise-opportunity', array('as' => 'franchise', 'uses' => 'ContentController@franchise'));
Route::get('hire-service', array('as' => 'hireservice', 'uses' => 'ContentController@hireService'));
Route::get('installation', array('as' => 'installation', 'uses' => 'ContentController@installation'));
Route::get('outdoor-weddings', array('as' => 'weddings', 'uses' => 'ContentController@outdoorWeddings'));
Route::get('showers', array('as' => 'showers', 'uses' => 'ContentController@showers'));
Route::get('toilets', array('as' => 'toilets', 'uses' => 'ContentController@toilets'));
Route::get('testimonials', array('as' => 'testimonials', 'uses' => 'ContentController@testimonials'));
Route::get('privacy-policy', array('as' => 'privacy', 'uses' => 'ContentController@privacy'));

/**
 * Franchisee search
 */
Route::get('portable-bathroom-hire', array('as' => 'franchisee.hire', 'uses' => 'FranchiseeController@index'));
Route::get('franchisee/{location}/{name}/{id}', array('as' => 'franchisee.profile', 'uses' => 'FranchiseeController@profile'));
Route::post('search', array('as' => 'franchisee.search', 'uses' => 'FranchiseeController@search'));