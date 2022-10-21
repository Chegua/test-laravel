<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/products', [ProductController::class, 'index'])
->name('products');

Route::post('/products', [ProductController::class, 'store'])
->name('products.store');

Route::put('/products/{product}', [ProductController::class, 'update'])
->name('products.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])
->name('products.delete');