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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('bill', 'App\Http\Controllers\BillController');
Route::resource('profile', 'App\Http\Controllers\ProfileController');
Route::resource('payment', 'App\Http\Controllers\PaymentController');

//API Residence
Route::get('residence', 'App\Http\Controllers\ResidenceController@index');
Route::get('residence/create', 'App\Http\Controllers\ResidenceController@create');
Route::post('residence', 'App\Http\Controllers\ResidenceController@store');
Route::get('residence/{residence}/edit', 'App\Http\Controllers\ResidenceController@edit');
Route::post('residence/{residence}', 'App\Http\Controllers\ResidenceController@update');

//API Tenant
Route::get('tenant/{id}/create', 'App\Http\Controllers\TenantController@create');
Route::post('tenant', 'App\Http\Controllers\TenantController@store');
Route::get('tenant/{id}/edit', 'App\Http\Controllers\TenantController@edit');
Route::post('tenant/{id}', 'App\Http\Controllers\TenantController@update');
Route::post('tenant/{roomID}/{userID}', 'App\Http\Controllers\TenantController@destroy');


