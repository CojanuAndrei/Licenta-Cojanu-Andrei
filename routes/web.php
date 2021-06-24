<?php

use Illuminate\Support\Facades\Auth;
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
	if(auth())
		return redirect("home");
    return view('welcome');
});

//guest routes
Route::get('/g_home',  function () {return view('welcome');})->name('g_home');
Route::get('/g_about',  function () {return view('about');})->name('g_about');
Route::get('/ajutor',  function () {return view('ajutor');})->name('ajutor');
Route::get('/suport',  function () {return view('suport');})->name('suport');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\HomeController@index')->name('about');

//autentificate routes
Route::view('create-account', function () {return view('auth/email_confirmation');});
Route::get('/log-in', 'App\Http\Controllers\HomeController@index')->name('log-in');
Route::get('/email_confirmation',  function () {return view('auth/email_confirmation');})->name('email_confirmation');
Route::get('/verify','App\Http\Controllers\Auth\RegisterController@verifyUser')->name('verify.user');
Route::get('send-mail', 'MailController@sendSignupEmail')->name('send.mail');
Route::view('/insert-business','auth/business_credential')->name("insert-business");

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	//user edit
	Route::put('profile_user', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('profile_user_edit', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	//firma edit
	Route::get('profile_firma_edit', ['as' => 'profile.edit_firma', 'uses' => 'App\Http\Controllers\ProfileController@edit_firma']);
	Route::put('profile_firma', ['as' => 'profile.update_firma', 'uses' => 'App\Http\Controllers\ProfileController@update_firma']);
	Route::post('save_firma', ['as' => 'profile.save_firma', 'uses' => 'App\Http\Controllers\FirmaController@register']);
	//premade pages
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	
	//adaugare tabel licitatie
	Route::get('add_licitatie', ['as' => 'add_licitatie', 'uses' => 'App\Http\Controllers\LicitatieController@addLicitatie']);
	Route::post('incarc_licitatie', ['as' => 'incarc_licitatie', 'uses' => 'App\Http\Controllers\LicitatieController@incarcLicitatie']);
	Route::put('verifica_licitatie', ['as' => 'verifica_licitatie', 'uses' => 'App\Http\Controllers\LicitatieController@verifLicitatie']);
	Route::put('verifica_lot', ['as' => 'verifica_lot', 'uses' => 'App\Http\Controllers\LicitatieController@verifLot']);
	Route::get('tabel_licitatii',['as' => 'tabel_licitatii', 'uses' => 'App\Http\Controllers\LicitatieController@afisTabelLicitatii']);
	Route::get('vezi_detalii',['as' => 'vezi_detalii', 'uses' => 'App\Http\Controllers\LicitatieController@veziDetalii']);
	Route::put('edita_licitatie', ['as' => 'edita_licitatie', 'uses' => 'App\Http\Controllers\LicitatieController@editaLicitatie']);
	Route::post('editare_licitatie', ['as' => 'editare_licitatie', 'uses' => 'App\Http\Controllers\LicitatieController@editareLicitatie']);
	

	//generare formulare
	Route::get('alegere_licitatie',['as' => 'alegere_licitatie', 'uses' => 'App\Http\Controllers\FormularController@alegereLicitatie']);
	Route::post('ales_licitatie',['as' => 'ales_licitatie', 'uses' => 'App\Http\Controllers\FormularController@alesLicitatie']);
	Route::post('ales_formular',['as' => 'ales_formular', 'uses' => 'App\Http\Controllers\FormularController@alesFormular']);
	Route::post('salvez_formular',['as' => 'salvez_formular', 'uses' => 'App\Http\Controllers\FormularController@salvezFormular']);
	
	

	//adaugare tabel imputerniciti
	Route::get('adauga_imputernicit', ['as' => 'adauga_imputernicit', 'uses' => 'App\Http\Controllers\ImputernicitController@verifImpAddImp']);
	Route::post('adaugat_imputernicit', ['as' => 'adaugat_imputernicit', 'uses' => 'App\Http\Controllers\ImputernicitController@register']);
	Route::get('tabel_imputerniciti',['as' => 'tabel_imputerniciti', 'uses' => 'App\Http\Controllers\ImputernicitController@afisImpTable']);
	
	//schimbare parola
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});



