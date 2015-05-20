<?php

/**
 * Main landing/home/splash page
 */
Route::get('/', [
    'as' => 'home', 'uses' => 'PagesController@showHome'
]);

/**
 * Products pages
 */
Route::get('products/webshops', [
    'as' => 'webshops', 'uses' => 'PagesController@showWebshops'
]);
Route::get('products/e-marketing', [
    'as' => 'e-marketing', 'uses' => 'PagesController@showEmarketing'
]);
Route::get('products/google-infrastructure', [
    'as' => 'google-infrastructure', 'uses' => 'PagesController@showGoogleInfrastructure'
]);
Route::get('products/hardware', [
    'as' => 'hardware', 'uses' => 'PagesController@showHardware'
]);

/**
 * References page
 */
Route::get('references', [
    'as' => 'references', 'uses' => 'PagesController@showReferences'
]);

/**
 * Jobs page
 */
Route::get('jobs', [
    'as' => 'jobs', 'uses' => 'PagesController@showJobs'
]);

/**
 * About page
 */
Route::get('about', [
    'as' => 'about', 'uses' => 'PagesController@showAbout'
]);

/**
 * Contact page
 */
Route::get('contact', [
    'as' => 'contact', 'uses' => 'PagesController@showContact'
]);

/**
 * Omnichannel page
 */
Route::get('omnichannel', [
    'as' => 'omnichannel', 'uses' => 'PagesController@showOmnichannel'
]);

/**
 * Webshop B2B page
 */
Route::get('webshopb2b', [
    'as' => 'webshopb2b', 'uses' => 'PagesController@showWebshopB2B'
]);