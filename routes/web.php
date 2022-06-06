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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group([ 'middleware' => ['auth'] ], function() {
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/users','App\Http\Controllers\DashboardController@users')->name('users');
    Route::get('/venues','App\Http\Controllers\DashboardController@venues')->name('venues');
    Route::get('/venues/add','App\Http\Controllers\DashboardController@newVenue')->name('new-venue');
});

require __DIR__.'/auth.php';
