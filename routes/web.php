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
Route::get('/', 'App\Http\Controllers\ServicerequestController@getrequestpage');
Route::get('/requests', 'App\Http\Controllers\ServicerequestController@getrequestpage');
Route::get('/services', 'App\Http\Controllers\ServicerequestController@getservicespage');
Route::get('/payments', 'App\Http\Controllers\ServicerequestController@getpaymentpage');
Route::post('/requestsupdate', 'App\Http\Controllers\ServicerequestController@saverequestpage')->name('requestsupdate');
Route::post('/servicesupdate', 'App\Http\Controllers\ServicerequestController@saveservicepage')->name('servicesupdate');

