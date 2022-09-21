<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;





Route::get('/',[ProductController::class,'create'])->Name('product.create');

Route::post('product-store',[ProductController::class,'store'])->Name('product.store');

Route::get('product-index',[ProductController::class,'index'])->Name('product.index');
