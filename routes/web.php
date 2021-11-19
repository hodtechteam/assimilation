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

Route::get('auth/google', [App\Http\Controllers\GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\GoogleSocialiteController::class, 'handleGoogleCallback']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\CardController::class, 'userHome']);
Route::get('cards', [App\Http\Controllers\CardController::class, 'index']);
Route::post('store/card', [App\Http\Controllers\CardController::class, 'store']);
Route::get('card/list', [App\Http\Controllers\CardController::class, 'cardList']);
Route::post('update/card', [App\Http\Controllers\CardController::class, 'updateCard']);
