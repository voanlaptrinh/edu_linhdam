<?php

use App\Http\Controllers\Users\HomeController;
use App\Http\Controllers\Users\IntroductionController;
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
Route::get('/teachers', [TeachersController::class, 'index'])->name('teachers.home');