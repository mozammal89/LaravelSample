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

// deliverychalan routes
Route::get('deliverychalan','DeliveryController@index')->name('deliverychalan.index');
Route::get('deliverychalan/create','DeliveryController@create')->name('deliverychalan.create');
Route::get('deliverychalan/report','DeliveryController@report')->name('deliverychalan.report');


//Product
Route::get('product','ProductController@index')->name('product.index');
Route::get('product/create','ProductController@create')->name('product.create');

Route::resource('dealer','DealerController');
Route::resource('report','ReportController');


