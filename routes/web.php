<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/helo',function(){
    return view('helo');
});

Route::get('/products', [ProductController::class, 'index']);
