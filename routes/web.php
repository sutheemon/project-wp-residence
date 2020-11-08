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

Route::apiResource('home', 'App\Http\Controllers\HomeController');
Route::apiResource('residence', 'App\Http\Controllers\ResidenceController');
Route::apiResource('bill', 'App\Http\Controllers\BillController');
Route::apiResource('profile', 'App\Http\Controllers\ProfileController');
Route::get('/',function(){
    return view('welcome');
});

