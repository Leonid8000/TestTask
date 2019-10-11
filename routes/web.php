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

Route::get('/home', 'HomeController@index')->name('home');





// Profile routes:

Route::resource('profiles', 'ProfileController');

Route::get('profile/info', 'ProfileController@info')->name('info');

Route::get('profile/preferences', 'ProfileController@preferences')->name('preferences');

Route::get('profile/edit', 'ProfileController@edit_form')->name('edit');
    
//Settings
Route::get('/settings', 'SettingsController@index')->name('settings');
//Change password
Route::post('/settings', 'SettingsController@changePassword')->name('settings.update');
//Route::resource('setting', 'SettingsController');

Route::get('/user', function () {
    $user = Auth::user();
    return $user;
});

