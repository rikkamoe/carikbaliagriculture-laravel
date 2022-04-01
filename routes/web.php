<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
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

//Superadmin
Route::get('/superadmin/login/', [AuthController::class, 'superadminlogin'])->name('login.superadmin');

//Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('dashboard.customer');

require __DIR__.'/auth.php';
