<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/product', action: [ProductController::class, 'index'])->name('products.index');


// Route::get('/product', function () {
//     return view('products.index');
// });

Route::get('/product/create', action: [ProductController::class, 'create'])->name('products.create');

Route::post('/product/store', action: [ProductController::class, 'store'])->name('products.store');



Route::get(uri: '/product/{product}/edit', action: [ProductController::class, 'edit'])->name('products.edit');



Route::put(uri: '/product/{product}/update', action: [ProductController::class, 'update'])->name('products.update');

Route::delete('/product/{product}/delete', action: [ProductController::class, 'delete'])->name('products.delete');