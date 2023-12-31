<?php


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

//QRCodes
Route::get('qr/code', [\App\Http\Controllers\QRCodeController::class, 'qrCode']);
Route::get('form', [\App\Http\Controllers\QRCodeController::class, 'fillForm']);
Route::post('store/form', [\App\Http\Controllers\QRCodeController::class, 'storeForm']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\CardController::class, 'userHome']);
Route::get('cards', [App\Http\Controllers\CardController::class, 'index']);
Route::post('store/card', [App\Http\Controllers\CardController::class, 'store']);
Route::post('update/phone', [App\Http\Controllers\CardController::class, 'updatePhone']);
Route::get('card/list', [App\Http\Controllers\CardController::class, 'cardList']);
Route::post('update/card/comment', [App\Http\Controllers\CardController::class, 'updateCardComment']);
Route::get('have/visited/{id}', [App\Http\Controllers\CardController::class, 'haveVisited']);
Route::post('update/card', [App\Http\Controllers\CardController::class, 'update']);
Route::get('edit/card/{id}', [App\Http\Controllers\CardController::class, 'editCard']);
Route::get('location/lng/{lng}/lat/{lt}', [App\Http\Controllers\CardController::class, 'location']);
Route::get('visitation', [\App\Http\Controllers\VisitationConroller::class, 'visitationList']);
Route::post('update/visitation/report', [\App\Http\Controllers\VisitationConroller::class, 'sendVisitationReport']);
Route::get('search/user', [\App\Http\Controllers\VisitationConroller::class, 'searchUser']);
//Admin Routes
Route::get('all/cards', [App\Http\Controllers\AdminController::class, 'allCards'])->name('allCard');
Route::get('contacted/cards', [App\Http\Controllers\AdminController::class, 'contactedCards']);
Route::get('visited/cards', [App\Http\Controllers\AdminController::class, 'visitedCards']);
Route::get('users/list', [App\Http\Controllers\AdminController::class, 'userList']);
Route::get('user/info/{id}', [App\Http\Controllers\AdminController::class, 'userInfo']);
Route::get('filter', [App\Http\Controllers\AdminController::class, 'filter'])->name('filter');
Route::get('uncontacted/cards', [\App\Http\Controllers\AdminController::class, 'uncontacted']);
Route::get('manage/house-hold', [\App\Http\Controllers\AdminController::class, 'manageHousehold']);
Route::get('manage/church-centres', [\App\Http\Controllers\AdminController::class, 'manageChurchCentres'])->name('church-centres');
Route::get('manage/centres', [\App\Http\Controllers\AdminController::class, 'createChurchCentres'])->name('create-church-centres');
Route::post('manage/centres', [\App\Http\Controllers\AdminController::class, 'storeChurchCentres'])->name('store-church-centres');
Route::get('manage/centre-edit/{centre}', [\App\Http\Controllers\AdminController::class, 'editChurchCentre'])->name('edit-church-centre');
Route::put('manage/centre-edit/{id}', [\App\Http\Controllers\AdminController::class, 'updateChurchCentre'])->name('update-church-centre');
Route::get('manage/fetch-centres/{id}', [\App\Http\Controllers\AdminController::class, 'fetchChurchCentres'])->name('fetch-church-centres');
Route::post('store/subgroup', [App\Http\Controllers\AdminController::class, 'storeSubgroup']);
Route::post('store/household', [App\Http\Controllers\AdminController::class, 'storeHousehold']);
Route::get('visitation/list', [App\Http\Controllers\AdminController::class, 'viewVisitationList'])->name('visitation.list');


