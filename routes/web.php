<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountDeletionController;
use App\Http\Controllers\TwoFactorController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('dashboard', DashboardController::class)->name('dashboard');

Route::get('auth/delete', [AccountDeletionController::class, 'index'])->name('auth.delete');
Route::post('auth/delete', [AccountDeletionController::class, 'destroy']);

Route::get('/auth/twofactor', TwoFactorController::class)->name('auth.twofactor');
