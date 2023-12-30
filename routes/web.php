<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\RegisterAccountController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    // 事業者登録
    Route::get('entry',[RegisterAccountController::class,'showRegister'])->name('entry');
    Route::post('entry',[RegisterAccountController::class,'entry'])->name('entry.input');
    Route::get('entry/confirm',[RegisterAccountController::class,'confirm'])->name('entry.confirm');
    Route::post('entry/confirm',[RegisterAccountController::class,'register'])->name('entry.register');
    Route::get('entry/certification',[RegisterAccountController::class,'certification'])->name('entry.certification');
    Route::get('entry/completion/{token}',[RegisterAccountController::class,'completion'])->name('entry.completion');

    // ポータル
    Route::get('login',[AccountController::class,'showLogin'])->name('show-login');
    Route::post('login',[AccountController::class,'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('portal',[AccountController::class,'showPortalTop'])->name('portal.top');
    Route::get('portal/reset-initial-password',[AccountController::class,'showPortalResetInitialPassword'])->name('portal.reset-initial-password');
    Route::post('portal/reset-initial-password',[AccountController::class,'showPortalResetInitialPasswordStore'])->name('portal.reset-initial-password-store');
    Route::get('logout',[AccountController::class,'logout'])->name('logout');
});
