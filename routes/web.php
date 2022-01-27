<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::view('/', 'welcome')->name('welcome');

Route::middleware(['auth', 'role:superadmin'])->prefix('admin')->group(function() {
    Route::view('user-verification', 'admin.user.verification')->name('admin.user.verification');
});
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
