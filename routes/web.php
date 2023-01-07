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
Route::get('/migrate', function () {
    Artisan::call('migrate', [
        '--force' => true,
    ]);
    dd('migrated!');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about_us', [HomeController::class, 'about_us'])->name('about_us');
Route::get('organization', [HomeController::class, 'organization'])->name('organization');
Route::get('posting', [HomeController::class, 'posting'])->name('posting');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('consultation', [HomeController::class, 'consultation'])->name('consultation');
Route::get('contact_us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::get('information', [HomeController::class, 'information'])->name('information');
Route::get('carrier', [HomeController::class, 'carrier'])->name('carrier');

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
