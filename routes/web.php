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
    return view('landing');
});
//google sign in and sign up
Route::get('auth/google', [App\Http\Controllers\GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\GoogleSocialiteController::class, 'handleGoogleCallback']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\CardController::class, 'userHome']);
Route::get('cards', [App\Http\Controllers\CardController::class, 'index']);
Route::post('store/card', [App\Http\Controllers\CardController::class, 'store']);
Route::get('card/list', [App\Http\Controllers\CardController::class, 'cardList']);
Route::post('update/card/comment', [App\Http\Controllers\CardController::class, 'updateCardComment']);
Route::get('have/visited/{id}', [App\Http\Controllers\CardController::class, 'haveVisited']);
Route::post('update/card', [App\Http\Controllers\CardController::class, 'update']);
Route::get('edit/card/{id}', [App\Http\Controllers\CardController::class, 'editCard']);

//Admin Routes
Route::get('all/cards', [App\Http\Controllers\AdminController::class, 'allCards']);
Route::get('contacted/cards', [App\Http\Controllers\AdminController::class, 'contactedCards']);
Route::get('visited/cards', [App\Http\Controllers\AdminController::class, 'visitedCards']);
Route::get('users/list', [App\Http\Controllers\AdminController::class, 'userList']);
Route::get('user/info/{id}', [App\Http\Controllers\AdminController::class, 'userInfo']);


