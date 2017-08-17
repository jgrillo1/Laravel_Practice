<?php

/*
|----------------------------
| Web Routes
|----------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| which contains the "web"middleware group. Now create something great!
|
 */

/*
 * the following function registers a route for the homepage of the site
*/
Route::get('/', function(){
	//technically the welcome view is really welcome.blade.php
	return view('welcome');
});

/*
 * can either reference an inline function like the one above
 * or can reference a controller as such
 * Route::get('/about', 'PagesController@about');
 * here the pagescontroller is used and calls the about method
*/
Route::get('/about', function(){
	return view('about');
});

