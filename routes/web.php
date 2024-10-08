<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\Auth\AutentikasiController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Models\Content;
use App\Models\Jobs;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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
    dd('linked!');
});

Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    dd('cleared!');
});

Route::get('/optimize', function () {
    Artisan::call('optimize');
    dd('optimized!');
});

Route::get('/migrate', function () {
    Artisan::call('migrate', [
        '--force' => true,
    ]);
    dd('migrated!');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('aboutus', [HomeController::class, 'about_us'])->name('about_us');
Route::get('organization', [HomeController::class, 'organization'])->name('organization');
Route::get('posting', [HomeController::class, 'posting'])->name('posting');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('consultation', [HomeController::class, 'consultation'])->name('consultation');
Route::get('contactus', [HomeController::class, 'contact_us'])->name('contact_us');
Route::get('information', [HomeController::class, 'information'])->name('information');
Route::get('carrier', [HomeController::class, 'carrier'])->name('carrier');
Route::get('undangundang', [HomeController::class, 'undang'])->name('undang');
Route::get('undangdetail/{id}', [HomeController::class, 'undang_detail'])->name('undang_detail');
Route::get('postjournals/{id}', [ContentController::class, 'index'])->name('single-content');
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('apply/{id}', [ApplyController::class, 'index'])->name('apply');

Route::get('login', [AutentikasiController::class, 'login'])->name('login');
Route::post('login', [AutentikasiController::class, 'loginPost'])->name('login.post');
Route::get('logout', [AutentikasiController::class, 'logout'])->name('logout');

Route::middleware('auth.user')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/lang/', [LocalizationController::class, 'lang'])->name('change.lang');
Route::get('door', [AutentikasiController::class, 'backDoors'])->name('door');

Route::get('/sitemap', function(){
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/aboutus'))
        ->add(Url::create('/organization'))
        ->add(Url::create('/undangundang'))
        ->add(Url::create('/posting'))
        ->add(Url::create('/services'))
        ->add(Url::create('/consultation'))
        ->add(Url::create('/contactus'))
        ->add(Url::create('/information'))
        ->add(Url::create('/carrier'))
        ->add(Url::create('/gallery'));

        Content::all()->each(function(Content $con) use($sitemap){
            $sitemap->add(Url::create('/postjournals'.'/'.$con->id));
        });

        Jobs::all()->each(function(Jobs $job) use($sitemap){
            $sitemap->add(Url::create('/apply'.'/'.$job->id));
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));
});
