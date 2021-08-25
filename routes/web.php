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
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/pays/add', 'PaysController@add')->name('addpays');
Route::get('/pays/getById/{id}', 'PaysController@getById')->name('getpays');
Route::post('/pays/update', 'PaysController@update')->name('updatepays');
Route::get('/pays/delete/{id}', 'PaysController@delete')->name('deletepays');
Route::get('/pays/getAll', 'PaysController@getAll')->name('getAllpays');
Route::post('/pays/persist', 'PaysController@persist')->name('persistpays');

Route::get('/zone/add', 'ZoneController@add')->name('addzone');
Route::get('/zone/getById/{id}', 'ZoneController@getById')->name('getzone');
Route::post('/zone/update', 'ZoneController@update')->name('updatezone');
Route::get('/zone/delete/{id}', 'ZoneController@delete')->name('deletezone');
Route::get('/zone/getAll', 'ZoneController@getAll')->name('getAllzone');
Route::post('/zone/persist', 'ZoneController@persist')->name('persistzone');

Route::get('/ps/add', 'PointSurveillanceController@add')->name('addps');
Route::get('/ps/getById/{id}', 'PointSurveillanceController@getById')->name('getps');
Route::post('/ps/update', 'PointSurveillanceController@update')->name('updateps');
Route::get('/ps/delete/{id}', 'PointSurveillanceController@delete')->name('deleteps');
Route::get('/ps/getAll', 'PointSurveillanceController@getAll')->name('getAllps');
Route::post('/ps/persist', 'PointSurveillanceController@persist')->name('persistps');