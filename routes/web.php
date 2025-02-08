<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.inizio')->name('inizio');

Route::middleware(['auth'])->group(function () {

    //--------------------------------USER---------------------------------//



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
