<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaleController;
use App\Models\Purchase;
use Illuminate\Support\Facades\Route;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/tes', function () {
//     return view('tes');
// });
Route::get('/table', function () {
    return view('table');
});
Route::resource('dashboard' , DashboardController::class);
Route::resource('distributor' , DistributorController::class);
Route::resource('products' ,    ProductController::class);
Route::resource('purchase',  PurchaseController::class);
Route::resource('users', UserController::class);
Route::resource('sale', SaleController::class);

// Route::resource('create' , DistributorController::class);
// Route::resource('edit' , DistributorController::class);