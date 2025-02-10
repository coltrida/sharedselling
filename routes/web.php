<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.inizio')->name('inizio');

Route::middleware(['auth'])->group(function () {

    //--------------------------------USER---------------------------------//
    Route::prefix('user')->group(function () {
        Route::view('/uploadProduct', 'pages.user.product.upload')->name('user.product.upload');
        Route::view('/myProducts', 'pages.user.product.myProducts')->name('user.product.myProducts');
        Route::view('/myProducts/{product}', 'pages.user.product.product')->name('user.product.product');
    });


    //---------------------------------ADMIN--------------------------------//
    Route::prefix('admin')->middleware(\App\Http\Middleware\VerifyIsAdmin::class)->group(function () {
        Route::view('/categories', 'pages.admin.category.list')->name('admin.category.list');
        Route::view('/products', 'pages.admin.product.list')->name('admin.product.list');
        Route::view('/users', 'pages.admin.user.list')->name('admin.user.list');
    });
});






Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
