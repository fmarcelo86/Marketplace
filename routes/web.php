<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/', ProductController::class)->name('home');

Route::get('order/{product}', [OrderController::class, 'index'])->name('order');

Route::post('order/{product}', [OrderController::class, 'save'])->name('save');

Route::put('order/{product}/{order}', [OrderController::class, 'pay'])->name('pay');

Route::get('order/{product}/{order}', [OrderController::class, 'update'])->name('update');

Route::get('client/{product}', [OrderController::class, 'clientData'])->name('client');

Route::get('orders', [OrderController::class, 'orders'])->name('orders');
