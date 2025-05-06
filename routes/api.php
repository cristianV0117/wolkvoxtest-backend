<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductsIndexController;
use App\Http\Controllers\Products\ProductsShowController;
use App\Http\Controllers\Products\ProductsStoreController;
use App\Http\Controllers\Products\ProductsUpdateController;
use \App\Http\Controllers\Products\ProductsDestroyController;

Route::get('/products', ProductsIndexController::class);

Route::get('/products/{id}', ProductsShowController::class);

Route::post('/products', ProductsStoreController::class);

Route::put('/products/{id}', ProductsUpdateController::class);

Route::delete('/products/{id}', ProductsDestroyController::class);
