<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PolicyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::resource('panel/admin', AdminController::class);

Route::group(['domain' => '{account}.policy.dotech.cfd'], function () {
    Route::get('/', [PolicyController::class, 'index']);
    // Route::resource('admin', AdminController::class);
});

Route::group(['domain' => 'policy.dotech.cfd/admin'], function () {
    Route::resource('admin', AdminController::class);
});
