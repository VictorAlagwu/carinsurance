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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cars', 'CarController@index');
Route::get('cars/new', 'CarController@create');
Route::post('cars', 'CarController@store');

Route::get('insurances', 'InsuranceController@index');
Route::get('insurances/new', 'InsuranceController@create');
Route::post('insurances', 'InsuranceController@store');

Route::get('claims', 'ClaimController@index');
Route::get('claims/new', 'ClaimController@create');
Route::post('claims', 'ClaimController@store');


Route::get('admin', 'AdminController@index');
Route::get('admin/cars', 'AdminController@viewCars');
Route::get('admin/insurances', 'AdminController@viewInsurances');
Route::get('admin/packages', 'AdminController@viewPackages');
Route::post('admin/packages', 'AdminController@storePackages')->name('admin/packages');
Route::get('admin/claims', 'AdminController@viewClaims');
Route::post('admin/claims/{id}', 'AdminController@updateClaims');
Route::post('admin/claim/approve/{id}', 'AdminController@claimApprove')->name('admin/claim/approve/');
Route::post('admin/claim/reject/{id}', 'AdminController@claimReject')->name('admin/claim/reject/');