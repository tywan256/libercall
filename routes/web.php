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
    return view('welcome');
});

Auth::routes();

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/welcome', 'HomeController@welcome')->name('welcome');

Route::get('register', 'RegistrationController@index')->name('register');
Route::post('requestcode', 'RegistrationController@requestcode')->name('requestcode');
Route::post('updateuser', 'RegistrationController@updateuser')->name('updateuser');

Route::get('faq', 'FaqController@index')->name('faq');
Route::get('contact', 'ContactController@index')->name('contact');

Route::group(['middleware' => ['auth']], function() {
	Route::post('credituser', 'HomeController@credituser')->name('credituser');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/home', 'HomeController@viewadverts')->name('home');
    Route::get('/upload', 'UploadController@index')->name('upload');
    Route::get('/upload', 'UploadController@clientadverts')->name('upload');
	Route::get('/dashboard', 'DashboardController@index');
	Route::post('uploadadvert', 'UploadController@uploadadvert')->name('uploadadvert');
});