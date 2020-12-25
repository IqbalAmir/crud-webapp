<?php

use Illuminate\Support\Facades\Route;


Route::get('', [\App\Http\Controllers\StadiumController::class, 'index']);
Route::get('/stadium', [\App\Http\Controllers\StadiumController::class, 'index'])->name('stadium.index');

Auth::routes();
Route::get('/auth/github/redirect', [\App\Http\Controllers\Auth\GithubController::class, 'redirect'])->name('github.redirect');
Route::get('/auth/github/callback', [\App\Http\Controllers\Auth\GithubController::class, 'callback'])->name('github.callback');



Route::middleware('auth')->group(function () {



    Route::post('/stadium', [\App\Http\Controllers\StadiumController::class, 'store']);
    Route::get('/stadium/create', [\App\Http\Controllers\StadiumController::class, 'create'])->name('stadium.create');
    Route::get('/stadium/{stadium}', [\App\Http\Controllers\StadiumController::class, 'show'])->name('stadium.id');

    Route::get('/stadium/{stadium}/edit', [\App\Http\Controllers\StadiumController::class, 'edit']);
    Route::put('/stadium/{stadium}', [\App\Http\Controllers\StadiumController::class, 'update']);

    Route::delete('/stadium/{stadium}', [\App\Http\Controllers\StadiumController::class, 'destroy']);

    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store']);
    Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'show'])->name('contact');

});
