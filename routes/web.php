<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;


Route::view("/", "home");


Route::get("/products", [ProductController::class, "index"])->name("products.index");


// Posts endpoint 
Route::get("/posts", [PostController::class, "index"]);


