<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HashtagController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\TeamController;
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

    // CLIENT
    Route::get('client', [ClientController::class, 'index'])->name('client');
    Route::get('team', [TeamController::class, 'index'])->name('team');
    Route::get('about_us', [AboutUsController::class, 'index'])->name('about_us');

    // Category ROUTE
    Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('list');
    });
    Route::group(['prefix' => 'hashtag', 'as' => 'hashtag.'], function () {
        Route::get('/', [HashtagController::class, 'index'])->name('list');
    });

    // Content ROUTE
    Route::group(['prefix' => 'content', 'as' => 'content.'], function () {
        Route::get('/', [ContentController::class, 'index'])->name('list');
    });

    // BANNER ROUTE
    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function () {
        Route::get('/', [BannerController::class, 'index'])->name('list');
        Route::post('post', [BannerController::class, 'post'])->name('post');
        Route::post('update/{id}', [BannerController::class, 'update'])->name('update');
        Route::get('delete/{id}', [BannerController::class, 'delete'])->name('delete');
    });

    // LEGAL SERVICES
    Route::group(['prefix' => 'services', 'as' => 'services.'], function () {
        Route::get('/', [ServicesController::class, 'index'])->name('list');
        Route::post('post', [ServicesController::class, 'post'])->name('post');
        Route::post('update/{id}', [ServicesController::class, 'update'])->name('update');
        Route::get('delete/{id}', [ServicesController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'webconfig', 'as' => 'webconfig.'], function () {
        Route::get('/', [WebConfigController::class, 'index'])->name('index');
        Route::post('update', [WebConfigController::class, 'update_config'])->name('update');
        Route::post('upload_company', [WebConfigController::class, 'upload_company'])->name('upload_company');
    });
});
