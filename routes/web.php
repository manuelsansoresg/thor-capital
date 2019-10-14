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
    /* about*/
    Route::resource('/about', 'admin\AboutController');
    Route::get('/about/image/destroy/{id}/{lang}', 'admin\AboutController@destroyImage');
    /* about*/
    /*criteria*/
    Route::resource('/criteria', 'admin\CriteriaController');
    Route::get('/criteria/image/destroy/{id}/{lang}', 'admin\CriteriaController@destroyImage');

    /*criteria*/
    /*criteria list*/
    Route::resource('/criteria-list', 'admin\CriteriaListController');
    Route::get('/criteria-list/create/{lang}', 'admin\CriteriaListController@create');
    Route::get('/criteria-list/edit/{id}/{lang}', 'admin\CriteriaListController@edit');
    Route::get('/criteria-list/destroy/{id}/{lang}', 'admin\CriteriaListController@destroy');
    /*criteria list*/
    /* team */
    Route::resource('/team', 'admin\TeamController');
    Route::get('/team/image/destroy/{id}/{lang}', 'admin\TeamController@destroyImage');
    /* team */
    /*transaction*/
    Route::resource('/transaction', 'admin\TransactionController');
    Route::get('/transaction/image/destroy/{id}/{lang}', 'admin\TeamController@destroyImage');
    /*transaction*/
    /* transaction list*/
    Route::resource('/transaction-list', 'admin\TransactionListController');
    Route::get('/transaction-list/create/{lang}', 'admin\TransactionListController@create');
    Route::get('/transaction-list/edit/{id}/{lang}', 'admin\TransactionListController@edit');
    Route::get('/transaction-list/destroy/{id}/{lang}', 'admin\TransactionListController@destroy');
    Route::get('/transaction-list/image/destroy/{id}/{lang}', 'admin\TransactionListController@destroyImage');
    /* transaction list*/

    /*contacto*/
    Route::resource('/contact', 'admin\ContactController');
    Route::get('/contact/image/destroy/{id}/{lang}', 'admin\ContactController@destroyImage');
    /*contacto*/

});

Auth::routes();

Route::get('/home', 'admin\AboutController@index')->name('home');
