<?php

use App\Http\Controllers\Users\ContactController;
use App\Http\Controllers\Users\CoursesController;
use App\Http\Controllers\Users\HomeController;
use App\Http\Controllers\Users\IntroductionController;
use App\Http\Controllers\Users\NewsController;
use App\Http\Controllers\Users\ProductsController;
use App\Http\Controllers\Users\TeachersController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/introduction', [IntroductionController::class, 'index'])->name('introduction.home');
Route::post('/storeEmail', [HomeController::class, 'store'])->name('store.email.home');
Route::prefix('/teachers')->group(function () {
    Route::get('/', [TeachersController::class, 'index'])->name('teachers.home');
    Route::get('/{alias}', [TeachersController::class, 'detail'])->name('teachers.detail.home');
});
Route::prefix('/products')->group(function () {
    Route::get('/', [ProductsController::class, 'index'])->name('products.home');
    Route::get('/{alias}', [ProductsController::class, 'detail'])->name('products.detail.home');
});
Route::prefix('/news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.home');
    Route::get('/{alias}', [NewsController::class, 'detail'])->name('news.detail.home');
});
Route::prefix('/contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.home');
    Route::post('/', [ContactController::class, 'store'])->name('contact.store.home');
});
Route::prefix('/courses')->group(function () {
    Route::get('/', [CoursesController::class, 'index'])->name('courses.home');
    Route::get('/{alias}', [CoursesController::class, 'detail'])->name('courses.detail.home');
});