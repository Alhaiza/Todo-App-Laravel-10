<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [TodoController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/register', [AuthController::class, 'register'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'storeAccount'])->middleware('guest')->name('storeAccount');
Route::get('/create', [TodoController::class, 'create'])->middleware('auth')->name('create');
Route::post('/store', [TodoController::class, 'store'])->middleware('auth')->name('store');
Route::get('edit/{id}', [TodoController::class, 'edit'])->middleware('auth')->name('edit');
Route::put('edit/{todo}', [TodoController::class, 'update'])->middleware('auth')->name('update');
Route::delete('delete/{id}', [TodoController::class, 'delete'])->middleware('auth')->name('delete');
