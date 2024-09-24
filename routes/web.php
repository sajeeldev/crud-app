<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', [ProductController::class, 'index'])->name('Products.index');    
Route::get('/product/create', [ProductController::class, 'create'])->name('Products.create');    
Route::post('/product', [ProductController::class, 'store'])->name('Products.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('Products.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('Products.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('Products.destroy');


