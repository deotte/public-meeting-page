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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meetings', 'App\Http\Controllers\MeetingsController@index')->middleware('auth.basic');
Route::get('/meetings/{meeting}', 'App\Http\Controllers\MeetingsController@show')->middleware('auth.basic');
Route::get('/meetings/{meeting}/public', 'App\Http\Controllers\MeetingsController@public_show')->name('meetings.public_show');
Route::put('/meetings/{meeting}', 'App\Http\Controllers\MeetingsController@update')->middleware('auth.basic');
Route::post('/rsvps', 'App\Http\Controllers\RsvpsController@store');
