<?php

use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\DashboashController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\WebConfigController;
use App\Http\Controllers\UploadController;
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

Route::prefix('/admin')->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [DashboashController::class, 'index'])->name('dashboard.admin');
    });
    Route::prefix('/news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('news.admin');
        Route::get('/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/store', [NewsController::class, 'store'])->name('news.store');
        Route::get('/{alias}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::get('/{alias}/detail', [NewsController::class, 'detail'])->name('news.admin.detail');
        Route::put('/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('delete/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    });
    
    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductsController::class, 'index'])->name('products.admin');
        Route::get('/create', [ProductsController::class, 'create'])->name('products.create');
        Route::post('/store', [ProductsController::class, 'store'])->name('products.store');
        Route::get('/{alias}/edit', [ProductsController::class, 'edit'])->name('products.edit');
        Route::get('/{alias}/detail', [ProductsController::class, 'detail'])->name('products.detailadmin');
        Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
        Route::delete('delete/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
    });
    Route::prefix('/webConfig')->group(function () {
        Route::get('/', [WebConfigController::class, 'index'])->name('webConfig.admin');
        Route::post('/update', [WebConfigController::class, 'update'])->name('webConfig.update');
    });
    Route::prefix('/policys')->group(function () {
        Route::get('/', [PolicyController::class, 'index'])->name('policys.admin');
        Route::get('/{alias}/edit', [PolicyController::class, 'edit'])->name('policys.edit');
        Route::put('/update/{id}', [PolicyController::class, 'update'])->name('policys.update');
    });
    Route::prefix('/banner')->group(function () {
        Route::get('/', [SliderController::class, 'index'])->name('banner.admin');
        Route::get('/create', [SliderController::class, 'create'])->name('banner.create');
        Route::post('/store', [SliderController::class, 'store'])->name('banner.store');
        Route::get('/{id}/edit', [SliderController::class, 'edit'])->name('banner.edit');
        Route::put('/{id}/update', [SliderController::class, 'update'])->name('banner.update');
        Route::delete('/delete/{id}', [SliderController::class, 'destroy'])->name('banner.destroy');
    });
    Route::prefix('/teachers')->group(function () {
        Route::get('/', [TeacherController::class, 'index'])->name('teacher.admin');
        Route::get('/create', [TeacherController::class, 'create'])->name('teacher.create');
        Route::post('/store', [TeacherController::class, 'store'])->name('teacher.store');
        Route::get('/{alias}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
        Route::get('/{alias}/detail', [TeacherController::class, 'detail'])->name('teacher.detail');
        Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('teacher.update');
        Route::delete('/delete/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
    });

    Route::prefix('/courses')->group(function () {
        Route::get('/', [CoursesController::class, 'index'])->name('courses.admin');
        Route::get('/create', [CoursesController::class, 'create'])->name('courses.create');
        Route::post('/store', [CoursesController::class, 'store'])->name('courses.store');
        Route::get('/{alias}/edit', [CoursesController::class, 'edit'])->name('courses.edit');
        Route::get('/{alias}/detail', [CoursesController::class, 'detail'])->name('courses.admin.detail');
        Route::put('/{id}', [CoursesController::class, 'update'])->name('courses.update');
        Route::delete('delete/{id}', [CoursesController::class, 'destroy'])->name('courses.destroy');
    });
    
    Route::post('/upload-image', [UploadController::class, 'uploadImage'])->name('upload-image');
    Route::post('/delete-image', [UploadController::class, 'deleteImage'])->name('delete-image');
});