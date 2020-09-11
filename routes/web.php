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

// Route::view('/', 'layouts.app');
Route::resource('/supplier', 'SupplierController');
Route::resource('/order', 'OrderController');
// Route::view('/orderhistory', 'supplier.orderhistory');
// Route::get('/orderhistory', 'SupplierController@orderHistory');
// Route::get('/requestorder', 'SupplierController@requestOrder');
// Route::view('/requestorder', 'supplier.requestorder');
// Route::view('/supplier/create', 'supplier.create');
// Route::view('/supplier/edit', 'supplier.edit');
