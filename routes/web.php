<?php

use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('daftar');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/log', [UserController::class, 'log']);
Route::get('/services', [ServicesController::class, 'index']);
Route::post('/daftar', [SocialiteController::class, 'daftar'])->name('register');
Route::post('/login', [SocialiteController::class, 'login'])->name('login');
Route::get('/login/google', [SocialiteController::class, 'loginGoogle'])->name('loginGoogle');
Route::get('/login/google/callback', [SocialiteController::class, 'callback']);
Route::get('/dashboard', [BookController::class, 'show'])->name('dashboard');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/books/create/{id?}', [BookController::class, 'index'])->name('books.index');
Route::get('/books/update/{id?}', [BookController::class, 'index'])->name('books.index');
Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
Route::post('/books/update/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/delete/{id}', [BookController::class, 'delete'])->name('books.delete');
