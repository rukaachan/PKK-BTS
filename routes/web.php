<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;

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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/', [AuthController::class, 'home']);
Route::get('/foto-murid', [AuthController::class, 'foto_murid']);
Route::get('/about', [AuthController::class, 'about']);

Route::get('/kategori-data', [DataController::class, 'category']);
Route::get('/kelola-data', [DataController::class, 'kelolaData']);