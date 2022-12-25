<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth.user')->prefix('admin')->as('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // USER ROUTE
    Route::get('list_admin', [UserController::class, 'index'])->name('user.list');
});
