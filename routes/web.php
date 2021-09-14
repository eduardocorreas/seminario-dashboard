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

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/panel/admin',[
    'as' => 'panel-admin',
    'uses' => 'HomeController@panelAdmin']);

Route::get('/panel/admin/complaints',[
    'as' => 'complaints',
    'uses' => 'ComplaintController@index']);

Route::get('/panel/seminarian',[
    'as' => 'panel-seminarian',
    'uses' => 'HomeController@panelSeminarian']);

Route::get('/seminarians',[
    'as' => 'seminarians',
    'uses' => 'SeminariansController@index']);

Route::get('/panel/vocational-record/{id}',[
    'as' => 'vocational-record',
    'uses' => 'VocationalRecordController@show']);

Route::get('/panel/my-vocational-record',[
    'as' => 'my-vocational-record',
    'uses' => 'VocationalRecordController@myVocationalRecord']);

Route::post('/panel/vocational-record',[
    'as' => 'vocational-record-update',
    'uses' => 'VocationalRecordController@update']);

Route::get('/delete-seminarian',[
    'as' => 'delete-seminarian',
    'uses' => 'SeminariansController@delete']);

Route::get('/panel/my-complaints',[
    'as' => 'my-complaint',
    'uses' => 'ComplaintController@myComplaints']);

Route::post('/store-complaint',[
    'as' => 'store-complaint',
    'uses' => 'ComplaintController@store']);

Route::get('/store-complaint-visualized/{id}',[
    'as' => 'store-visualized',
    'uses' => 'ComplaintController@storeVisualized']);

Route::get('/delete-complaint/{id}',[
    'as' => 'delete-complaint',
    'uses' => 'ComplaintController@delete']);


Route::get('/attendances/{user_id}',[
    'as' => 'attendances',
    'uses' => 'AttendanceController@index']);

Route::post('/store-attendance',[
    'as' => 'store-attendance',
    'uses' => 'AttendanceController@store']);

Route::get('/attendance-detail/{id}',[
    'as' => 'attendance-detail',
    'uses' => 'AttendanceController@show']);

Route::get('/delete-attendance/{id}',[
    'as' => 'delete-attendance',
    'uses' => 'AttendanceController@delete']);

Route::post('/update-attendance',[
    'as' => 'update-attendance',
    'uses' => 'AttendanceController@update']);


