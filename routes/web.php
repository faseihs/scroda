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

Route::get('/','WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix'=>'client','middleware'=>'client'],function (){
    Route::get('dashboard','Client\DashboardController@index');
});


Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
    Route::get('dashboard','Admin\DashboardController@index');
    Route::get('clients','Admin\DashboardController@clients');
    Route::get('address-requests','Admin\AddressController@requests');
    Route::patch('address-requests/{id}','Admin\AddressController@requestUpdate');
});


