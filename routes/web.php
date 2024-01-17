<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/auth', [AuthController::class, 'auth']);

Route::post('/auth_user', [AuthController::class, 'auth_user']);

Route::get('/reg', [AuthController::class, 'reg']);

Route::post('/reg_user', [AuthController::class, 'reg_user']);

Route::get('/exit', [AuthController::class, 'exit']);


Route::get('/applications', [UserController::class, 'getApp'])->name('getApp');
Route::post('/applications/create', [UserController::class, 'app_create'])->name('app_create');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
