<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [\App\Http\Controllers\Guest\HomeController::class, 'index'])->name('home');
Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog.index');
Route::get('/catalog/category/{category}', [\App\Http\Controllers\CatalogController::class, 'category'])->name('catalog.category');
Route::get('/catalog/tag/{tag}', [\App\Http\Controllers\CatalogController::class, 'tag'])->name('catalog.tag');
Route::get('/catalog/product/{product}', [\App\Http\Controllers\CatalogController::class, 'show'])->name('catalog.show');

Route::get('/how-we-working', function () {
    return view('pages.guest.how-we-working');
})->name('how-we-working');

Route::get('/about-company', function () {
    return view('pages.guest.about-company');
})->name('about-company');

Route::get('/contacts', function () {
    return view('pages.guest.contacts');
})->name('contacts');






/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('products', \App\Http\Controllers\ProductController::class);
    Route::resource('tags', \App\Http\Controllers\TagController::class);

    Route::get('products/category/{category}', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.category.index');

    Route::get('/settings', function () {return view('pages.admin.settings');})->name('settings');

    Route::post('file-import', [\App\Http\Controllers\ImportExportController::class, 'fileImport'])->name('file-import');
    Route::get('file-export', [\App\Http\Controllers\ImportExportController::class, 'fileExport'])->name('file-export');

    Route::get('image-export/{product}', [\App\Http\Controllers\ProductController::class, 'downloadImage'])->name('image-export');
    Route::get('video-export/{product}', [\App\Http\Controllers\ProductController::class, 'downloadVideo'])->name('video-export');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
