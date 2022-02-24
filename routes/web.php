<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TeamController;
use  App\Http\Controllers\PlayerController;
use  App\Http\Controllers\AuthController;

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

Route::get('/', [TeamController::class, 'index'])->middleware('auth');
Route::get('/teams/{id}', [TeamController::class, 'show']);
Route::get('/players/{id}', [PlayerController::class, 'show']);
Route::get('/register', [AuthController::class, 'getRegisterForm']);
Route::post('/register', [AuthController::class, 'create']);
Route::get('/login', [AuthController::class, 'getLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);




