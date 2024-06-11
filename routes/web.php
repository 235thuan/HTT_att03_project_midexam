<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');

Route::post('/products/add', [ProductController::class, 'add'])->name('products.add');

Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
