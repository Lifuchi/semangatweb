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
route::get('/nav', 'NavbarController@Cleaner');
route::get('/nav', 'NavbarController@Technician');
route::get('/nav', 'NavbarController@CaraKerja');

// route::get('/nav', function() {
// 	return view('pkjcleaner');
// });

// route::get('/nav', function() {
// 	return view('pkjtech');
// });


// route::get('/nav', function() {
// 	return view('carakerja');
// });

route::get('/nav', function() {
	return view('daftar');
});