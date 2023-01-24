<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RentlogController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

// untuk menampilkan halaman
// menggroup kan middlaware yang sama
Route::middleware('only_guest')->group(function() { 
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('registrasi', [AuthController::class, 'registrasi']);
    Route::post('registrasi', [AuthController::class, 'authregist']);
    // untuk semua proses 
    Route::post('login', [AuthController::class, 'authLogin']);
});

Route::middleware('auth')->group(function() { 
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('dashboard', [AdminController::class, 'index'])->middleware('only_admin');
    Route::get('profile', [ClientController::class, 'index'])->middleware('only_client');
    Route::get('books', [BooksController::class, 'index']);
    Route::get('/categories', [CategoriesController::class, 'index']);
    Route::get('/categories/add', [CategoriesController::class, 'add']);


    Route::get('users', [UsersController::class, 'index']);
    Route::get('rent-logs', [RentlogController::class, 'index']);
});
