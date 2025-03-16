<?php

use App\Http\Controllers\Admin\DashboashController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\WebConfigController;
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
    // Route::prefix('/categorys')->group(function () {
    //     Route::get('/', [CategoryController::class, 'index'])->name('categorys.admin');
    //     Route::get('/create', [CategoryController::class, 'create'])->name('categorys.create');
    //     Route::post('/store', [CategoryController::class, 'store'])->name('categorys.store');
    //     Route::get('/{alias}/edit', [CategoryController::class, 'edit'])->name('categorys.edit');
    //     Route::put('/{id}', [CategoryController::class, 'update'])->name('categorys.update');
    //     Route::delete('delete/{id}', [CategoryController::class, 'destroy'])->name('categorys.destroy');
    // });
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
    // Route::prefix('/orders')->group(function () {
    //     Route::get('/', [OrderController::class, 'index'])->name('orders.admin');
    //     Route::get('/detail/{orderNumber}', [OrderController::class, 'orderdetail'])->name('orders.admin.detail');
    //     Route::put('/update-status/{orderNumber}', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');

    // });
});