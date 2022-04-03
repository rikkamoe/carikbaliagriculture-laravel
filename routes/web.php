<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\SuperadminProductController;
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

//Guest
Route::get('/', [HomeController::class, 'index'])->name('dashboard.guest');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product.guest');
Route::get('/education', [HomeController::class, 'education'])->name('education.guest');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.guest');

//Login Filter Session
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');
});

//Superadmin
Route::get('/superadmin/login/', [AuthController::class, 'superadminlogin'])->name('login.superadmin');
Route::group(['middleware' => ['auth', 'role:superadmin']], function() {
    Route::get('/superadmin/dashboard', [SuperadminController::class, 'index'])->name('dashboard.superadmin');
    Route::get('/superadmin/product', [SuperadminProductController::class, 'index'])->name('product.superadmin');
    Route::post('/superadmin/product', [SuperadminProductController::class, 'store'])->name('post.product.superadmin');
    Route::post('/superadmin/product/edit/{id}', [SuperadminProductController::class, 'update'])->name('update.product.superadmin');
    Route::delete('/superadmin/product/delete/{id}', [SuperadminProductController::class, 'destroy'])->name('delete.product.superadmin');
});

//Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('dashboard.customer');


require __DIR__.'/auth.php';
