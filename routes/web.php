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
route::get('/reg', ['as' => 'regView', 'uses' => 'FormController@register']);
route::get('/daftar', ['as' => 'daftarView', 'uses' => 'FormController@daftar']);
route::get('Cleaner',['as' => 'cleanerView', 'uses' => 'NavbarController@Cleaner']);
route::get('/Technician', ['as' => 'technicianView', 'uses' => 'NavbarController@Technician']);
route::get('/CaraKerja', ['as' => 'caraKerjaView', 'uses' => 'NavbarController@CaraKerja']);

// route::get('/nav', function() {
// 	return view('pkjcleaner');
// });

// route::get('/nav', function() {
// 	return view('pkjtech');
// });


// route::get('/nav', function() {
// 	return view('carakerja');
// });

// route::get('/navs', function() {
// 	return view('daftar');
// });