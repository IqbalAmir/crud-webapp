<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('',[\App\Http\Controllers\StadiumController::class, 'index']);
Route::get('/stadium',[\App\Http\Controllers\StadiumController::class, 'index'])->name('stadium.index');


Route::post('/stadium',[\App\Http\Controllers\StadiumController::class, 'store']);
Route::get('/stadium/create',[\App\Http\Controllers\StadiumController::class, 'create'])->name('stadium.create');
Route::get('/stadium/{stadium}',[\App\Http\Controllers\StadiumController::class, 'show'])->name('stadium.id');

Route::get('/stadium/{stadium}/edit',[\App\Http\Controllers\StadiumController::class, 'edit']);
Route::put('/stadium/{stadium}',[\App\Http\Controllers\StadiumController::class, 'update']);

Route::delete('/stadium/{stadium}',[\App\Http\Controllers\StadiumController::class, 'destroy']);


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

