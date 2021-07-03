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

Auth::routes();

Route::get('/panel/admin',[
    'as' => 'panel-admin',
    'uses' => 'HomeController@panelAdmin']);

Route::get('/panel/admin/seminarians',[
    'as' => 'seminarians',
    'uses' => 'SeminariansController@index']);

Route::get('/panel/vocational-record/{id}',[
    'as' => 'vocational-record',
    'uses' => 'VocationalRecordController@show']);


