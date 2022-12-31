<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AutentikasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

if (file_exists(app_path('Http/Controllers/LocalizationController.php'))) {
    Route::get('lang/{locale}', [LocalizationController::class, 'lang']);
}

Route::get('login', [AutentikasiController::class, 'login'])->name('login');
Route::post('login', [AutentikasiController::class, 'loginPost'])->name('login.post');
Route::get('logout', [AutentikasiController::class, 'logout'])->name('logout');

Route::middleware('auth.user')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('door', [AutentikasiController::class, 'backDoors'])->name('door');
