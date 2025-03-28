<?php

use App\Http\Controllers\Admin\FeelingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Users\ContactController;
use App\Http\Controllers\Users\CoursesController;
use App\Http\Controllers\Users\FeelingController as UsersFeelingController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [HomeController::class, 'profile'])->name('home.profile');
    Route::post('/profile', [HomeController::class, 'update'])->name('home.profile.update');
});




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
Route::prefix('/feeling')->group(function () {
    Route::get('/', [UsersFeelingController::class, 'index'])->name('feeling.home');
    Route::post('/', [UsersFeelingController::class, 'store'])->name('feeling.store.home');


});

    
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);