<?php

use Illuminate\Support\Facades\Route;


Route::get('', [\App\Http\Controllers\StadiumController::class, 'index']);
Route::get('/stadium', [\App\Http\Controllers\StadiumController::class, 'index'])->name('stadium.index');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'show'])->name('contact');

Auth::routes();
Route::get('/auth/github/redirect', [\App\Http\Controllers\Auth\GithubController::class, 'redirect'])->name('github.redirect');
Route::get('/auth/github/callback', [\App\Http\Controllers\Auth\GithubController::class, 'callback'])->name('github.callback');



Route::middleware('auth')->group(function () {

    Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
    Route::get('/searchproduct', [\App\Http\Controllers\ShopController::class, 'searchProduct']);

    Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [\App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart/{product}', [\App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');

    Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [\App\Http\Controllers\CheckoutController::class, 'store'])->name('checkout.store');

    Route::get('empty', function(){
        \Cart::clear();
    });

    Route::post('/stadium', [\App\Http\Controllers\StadiumController::class, 'store']);
    Route::get('/stadium/create', [\App\Http\Controllers\StadiumController::class, 'create'])->name('stadium.create');
    Route::get('/stadium/{stadium}', [\App\Http\Controllers\StadiumController::class, 'show'])->name('stadium.id');
    Route::get('/search', [\App\Http\Controllers\StadiumController::class, 'search']);

    Route::get('/stadium/{stadium}/edit', [\App\Http\Controllers\StadiumController::class, 'edit'])->middleware('can:edit_form');
    Route::put('/stadium/{stadium}', [\App\Http\Controllers\StadiumController::class, 'update']);

    Route::delete('/stadium/{stadium}', [\App\Http\Controllers\StadiumController::class, 'destroy']);

    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store']);

});
