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
|Route::get('/', 'HomeController@show');
Route::post('/', 'HomeController@storePhoneNumber');
Route::post('/custom', 'HomeController@sendCustomMessage');
*/


Route::get('/sms', '\App\Http\Controllers\HomeController2@show');
Route::post('/sms', '\App\Http\Controllers\HomeController2@storePhoneNumber');

Route::post('/custom', '\App\Http\Controllers\HomeController2@sendCustomMessage');



;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/chart', '\App\Http\Controllers\ControllerChart@index');


Route::view('/', 'call');
Route::post('/call', '\App\Http\Controllers\VoiceController@initiateCall')->name('initiate_call');