<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/products', [productController::class, 'index']);
Route::post('/products', [productController::class, 'store']);