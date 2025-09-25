<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [AuthController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});

// お問い合わせフォーム入力ページ
Route::get('/', [ContactController::class, 'index']);

// 確認ページ
Route::post('/confirm', [ContactController::class, 'confirm']);

// サンクスページ
Route::post('/thanks', [ContactController::class, 'thanks']);

// 管理画面
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

Route::get('/admin/contacts', [AdminController::class, 'contacts'])->middleware('auth');
