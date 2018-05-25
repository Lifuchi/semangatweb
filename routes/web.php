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
    return view('home');
});


// misalnih
route::get('/reg', 'FormController@register');

route::get('/job', function() {
	return view('pkjcleaner');
});

route::get('/job2', function() {
	return view('pkjtech');
});

route::get('/home', function() {
	return view('home');
});

route::get('/how', function() {
	return view('carakerja');
});

route::get('/daftar', function() {
	return view('daftar');
});