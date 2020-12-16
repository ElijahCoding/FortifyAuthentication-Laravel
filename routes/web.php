<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountDeletionController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('dashboard', DashboardController::class)->name('dashboard');

Route::get('auth/delete', [AccountDeletionController::class, 'index'])->name('auth.delete');
Route::post('auth/delete', [AccountDeletionController::class, 'destroy']);
