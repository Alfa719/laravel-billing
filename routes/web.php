<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);
Route::view('/', 'welcome')->name('welcome');

#Route Auth Admin
Route::view('admin/login', 'admin.auth.login')->name('admin.login')->middleware('guest');
Route::post('admin/login', [AdminController::class, 'login']);


Route::middleware(['auth', 'role:superadmin'])->prefix('admin')->group(function() {
    Route::get('user-verification', [AdminController::class, 'verifyUser'])->name('admin.user.verification');
});
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
