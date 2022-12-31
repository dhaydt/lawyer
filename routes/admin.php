<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WebConfigController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth.user')->prefix('admin')->as('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // USER ROUTE
    Route::get('list_admin', [UserController::class, 'index'])->name('user.list');
    Route::post('add_admin', [UserController::class, 'add_admin'])->name('post-admin');
    Route::post('update_admin', [UserController::class, 'update_admin'])->name('update-admin');
    Route::get('delete-admin/{id}', [UserController::class, 'delete_admin'])->name('delete-admin');

    // BANNER ROUTE
    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function () {
        Route::get('/', [BannerController::class, 'index'])->name('list');
        Route::post('post', [BannerController::class, 'post'])->name('post');
        Route::post('update/{id}', [BannerController::class, 'update'])->name('update');
        Route::get('delete/{id}', [BannerController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'webconfig', 'as' => 'webconfig.'], function () {
        Route::get('/', [WebConfigController::class, 'index'])->name('index');
        Route::post('update', [WebConfigController::class, 'update_config'])->name('update');
    });
});
