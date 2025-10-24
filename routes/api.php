<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

// Get all products
Route::get('/products', [ProductController::class, 'index']);

// Get single product by ID
Route::get('/products/{id}', [ProductController::class, 'show']);
