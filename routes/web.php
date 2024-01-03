<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\RegisterAccountController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\OperatorController;

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

    Route::get('reset-password-request',[AccountController::class,'showResetPasswordRequest'])->name('reset-password-request');
    Route::post('reset-password-request',[AccountController::class,'resetPasswordRequestConfirm'])->name('reset-password-request-confirm');
    Route::post('reset-password-request-complete',[AccountController::class,'resetPasswordRequestComplete'])->name('reset-password-request-complete');
    Route::get('reset-password/{token}',[AccountController::class,'showResetPassword'])->name('reset-password');
    Route::post('reset-password-complete',[AccountController::class,'resetPasswordComplete'])->name('reset-password-complete');
});

Route::middleware('auth')->group(function () {
    Route::get('portal',[AccountController::class,'showPortalTop'])->name('portal.top');
    Route::get('portal/reset-initial-password',[AccountController::class,'showPortalResetInitialPassword'])->name('portal.reset-initial-password');
    Route::post('portal/reset-initial-password',[AccountController::class,'showPortalResetInitialPasswordStore'])->name('portal.reset-initial-password-store');

    // パスワード再設定
    Route::get('portal/change-password',[AccountController::class,'showPortalChangePassword'])->name('portal.change-password');
    Route::post('portal/change-password',[AccountController::class,'portalChangePasswordStore'])->name('portal.change-password-store');

    // ログアウト
    Route::post('logout',[AccountController::class,'logout'])->name('logout');

    Route::prefix('portal')->name('portal.')->group(function () {
        // 本アカウントの利用者の情報
        Route::prefix('/manager')->name('manager.')->group(function () {
            Route::get('/detail', [ManagerController::class, 'detail'])->name('detail');
            Route::get('/edit', [ManagerController::class, 'edit'])->name('edit');
            Route::put('/update', [ManagerController::class, 'update'])->name('update');
        });
        // 事業者登録の情報
        Route::prefix('/operator')->name('operator.')->group(function () {
            Route::get('/detail', [OperatorController::class, 'detail'])->name('detail');
            Route::get('/edit', [OperatorController::class, 'edit'])->name('edit');
            Route::put('/update', [OperatorController::class, 'update'])->name('update');
        });
            // 添付書類登録画面
            Route::get('/documentUpload', [OperatorController::class, 'docCreate'])->name('operator.docCreate');
            // 添付書類登録処理
            Route::post('/documentUpload', [OperatorController::class, 'docStore'])->name('operator.docStore');
            // 登録申請画面
            Route::get('/registration', [OperatorController::class, 'regRequestCreate'])->name('operator.regRequestCreate');
            // 登録申請処理
            Route::post('/registration', [OperatorController::class, 'regRequestStore'])->name('operator.regRequestStore');
    });
});
