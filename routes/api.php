<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;

// Get all products
Route::get('/products', [ProductApiController::class, 'index']);

// Get single product by ID
Route::get('/products/{id}', [ProductApiController::class, 'show']);
