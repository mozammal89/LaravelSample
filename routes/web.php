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
    return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('demand','DemandController');

// demand routes
Route::get('demand','DemandController@index')->name('demand.index');
Route::get('demand/create','DemandController@create')->name('demand.create');
Route::get('demand/report','DemandController@report')->name('demand.report');

Route::resource('deliverychalan','DeliveryController');
Route::resource('dealer','DealerController');
Route::resource('report','ReportController');


