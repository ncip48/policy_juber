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

// Route::get('/', [PolicyController::class, 'tnc']);

Route::group(['domain' => '{account}.policy.dotech.cfd'], function () {
    Route::get('/', [PolicyController::class, 'index']);
});

Route::group(['domain' => '{account}.policy.berkah-ts.my.id'], function () {
    Route::get('/', [PolicyController::class, 'index']);
});

Route::group(['domain' => '{account}.policy.berkah-ts.tech'], function () {
    Route::get('/', [PolicyController::class, 'index']);
});

Route::group(['domain' => 'tnc-nonaktif.policy.berkah-ts.tech'], function () {
    Route::get('/', [PolicyController::class, 'tnc']);
});

Route::resource('admin', AdminController::class);
