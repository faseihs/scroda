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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::group(['prefix'=>'client','middleware'=>'client'],function (){
    Route::get('dashboard','Client\DashboardController@index');
    Route::get('subscribe','Client\DashboardController@subscribe');
    Route::get('unsubscribe','Client\DashboardController@unsubscribe');
    Route::get('address-request','Client\DashboardController@addressRequest');
    Route::get('transaction',function (){
       return view('client.transaction') ;
    });
    Route::get('referral',function (){
        return view('client.referral') ;
    });
    Route::get('account',function (){
        return view('client.account') ;
    });
    Route::get('security',function (){
        return view('client.security') ;
    });
});


Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
    Route::get('dashboard','Admin\DashboardController@index');
    Route::get('clients','Admin\DashboardController@clients');
    Route::get('address-requests','Admin\AddressController@requests');
    Route::post('assign-address','Admin\AddressController@assignAddress');
});


Route::group(['prefix'=>'common','middleware'=>'auth'],function (){
    Route::get('conversion','Common\CommonController@conversion');
});


