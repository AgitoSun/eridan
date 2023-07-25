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
Route::get('/', function () {
    return view('pages.guest.home');
})->name('home');

Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog.index');
Route::get('/catalog/category/{category}', [\App\Http\Controllers\CatalogController::class, 'category'])->name('catalog.category');
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
    Route::get('/dashboard', function () {return view('pages.admin.dashboard');})->name('dashboard');

    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('products', \App\Http\Controllers\ProductController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
