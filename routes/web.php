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
// route::get('/reg', ['as' => 'regView', 'uses' => 'FormController@register']);
route::get('/Cleaner',['as' => 'cleanerView', 'uses' => 'NavbarController@Cleaner']);
route::get('/Technician', ['as' => 'technicianView', 'uses' => 'NavbarController@Technician']);
route::get('/CaraKerja', ['as' => 'caraKerjaView', 'uses' => 'NavbarController@CaraKerja']);

route::get('/ProfilPekerja/{id}', 'NavbarController@ProfilPekerja');

Route::get('/logout', 'UsersController@logout');
Route::post('/registerPost', 'UsersController@registerPost');
Route::post('/loginPost', 'UsersController@loginPost');
Route::get('/logini', 'UsersController@login');
Route::get('/registeri', 'UsersController@register');
route::get('/daftar', ['as' => 'daftarView', 'uses' => 'PendaftarController@daftar']);
Route::post('/daftarPost', 'PendaftarController@store');
Route::post('/registerPost', 'UsersController@registerPost');
Route::get('/logout', 'UsersController@logout');
Route::get('/anggota', 'AnggotaController@index');
Route::get('/home', 'UsersController@index');

Route::get('/anggota/{id}', 'AnggotaController@index');
// route::get('/nav', function() {
// 	return view('pkjcleaner');
// });

// route::get('/nav', function() {
// 	return view('pkjtech');
// });


// route::get('/nav', function() {
// 	return view('carakerja');
// });

Auth::routes();