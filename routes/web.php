<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


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


Route::get('/home', '\App\Http\Controllers\HomeController2@show');
Route::post('/home', '\App\Http\Controllers\HomeController2@storePhoneNumber');

Route::post('/custom', '\App\Http\Controllers\HomeController2@sendCustomMessage');



;

Auth::routes(

);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/chart', '\App\Http\Controllers\ControllerChart@index');

Route::view('/', '/student');


Route::post('/call', '\App\Http\Controllers\VoiceController@initiateCall')->name('initiate_call');
Route::get('/',"\App\Http\Controllers\StudentController@index") ;

Route::get('/edit/{id}',"\App\Http\Controllers\StudentController@edit") ;
Route::get('/show/{id}',"\App\Http\Controllers\StudentController@show") ;
Route::get('/create',"\App\Http\Controllers\StudentController@create") ;
Route::post('/store',"\App\Http\Controllers\StudentController@store") ;
Route::post('/update/{id}',"\App\Http\Controllers\StudentController@update") ;


Route::get('/index',[Controller::class, 'index']);
Route::post('/voice',[Controller::class, 'voice']);
Route::post('/token',[Controller::class, 'token']);


