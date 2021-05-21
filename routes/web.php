<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\HomeController@index')->name('about');

Route::get('/g_home',  function () {return view('welcome');})->name('g_home');
Route::get('/g_about',  function () {return view('about');})->name('g_about');


Route::view('/test', 'profile/edit_firma');
Route::view('/test1', 'auth/business_credential');

Route::view('create-account', function () {return view('auth/email_confirmation');});
Route::view('insert-business', function () {return view('auth/business_credetial');});


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	
	Route::get('profile_firma', ['as' => 'profile.edit_firma', 'uses' => 'App\Http\Controllers\ProfileController@edit_firma']);
	Route::put('profile_firma', ['as' => 'profile.update_firma', 'uses' => 'App\Http\Controllers\ProfileController@update_firma']);
	
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	
	Route::get('tabel_licitatii', function () {return view('tables/tabel_licitatii');})->name('tabel_licitatii');
	Route::get('tabel_imputerniciti', function () {return view('tables/tabel_imputerniciti');})->name('tabel_imputerniciti');
	
	Route::get('add_licitatie', function () {return view('add/add_licitatie');})->name('add_licitatie');
	Route::get('add_imputernicit', function () {return view('add/add_imputernicit');})->name('add_imputernicit');
	
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Auth::routes(['verify' => true]);

Route::get('/verify','App\Http\Controllers\Auth\RegisterController@verifyUser')->name('verify.user');

Route::get('send-mail', 'MailController@sendSignupEmail')->name('send.mail');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

