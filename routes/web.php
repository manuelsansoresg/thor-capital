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
    return view('lading');
});

Route::get('/animacion', function () {
    return view('animacion');
});

Route::post('/contact/send', 'MailController@sendContact');

Route::group(['middleware' => ['web']], function () {

    Route::get('lang/{lang}', function ($lang) {

        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es|fr'
    ]);

});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/about', 'admin\AboutController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
