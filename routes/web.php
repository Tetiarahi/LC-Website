<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CommissionerController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/chairman', [HomeController::class, 'chairman'])->name('chairman');
Route::get('/commissioners', [HomeController::class, 'commissioners'])->name('commissioners');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/report-corruption', [HomeController::class, 'reportCorruption'])->name('report-corruption');
Route::get('/organizational-structure', [HomeController::class, 'orgStructure'])->name('org-structure');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/page/{slug}', [HomeController::class, 'page'])->name('page');

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('sliders', SliderController::class);
    Route::resource('commissioners', CommissionerController::class);
    Route::resource('news', NewsController::class);
    Route::resource('pages', PageController::class);
    Route::resource('documents', DocumentController::class)->only(['index', 'create', 'store', 'destroy']);
    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
