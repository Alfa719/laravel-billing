<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::view('welcome', 'welcome')->name('welcome');

Route::view('/', 'user.dashboard')->name('user.dashboard');
Route::middleware(['auth', 'role:superadmin'])->group(function() {
    Route::view('user-verification', 'admin.user.verification')->name('admin.user.verification');
});