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



Route::get('/stadium',[\App\Http\Controllers\StadiumController::class, 'index']);
Route::post('/stadium',[\App\Http\Controllers\StadiumController::class, 'store']);
Route::get('/stadium/create',[\App\Http\Controllers\StadiumController::class, 'create']);
Route::get('/stadium/{id}',[\App\Http\Controllers\StadiumController::class, 'show']);


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

