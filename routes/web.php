<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;


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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('welcome', [HomeController::class, 'welcome'])->name('welcome');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', LoginController::class)->name('admin.login');
    Route::post('/verify', [LoginController::class, 'login'])->name('admin.verify');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::resource('new', NewController::class);


    Route::get('home', [AdminController::class, 'home'])->name('admin.home');
    Route::resource('product', ProductsController::class);
    /** A rota product.relation ajuda no relacionamento entre categoria e produto */
    Route::get('product/edit/{product}/{category}', [ProductsController::class, 'edit'])->name('product.relation');
    Route::resource('category', CategoryController::class);
    Route::get('banners', [AdminController::class, 'banners'])->name('admin.banners');
    Route::resource('contact', ContactController::class);
    Route::resource('user', UserController::class);
});


