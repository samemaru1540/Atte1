<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\RestController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
    Route::post('/', [TimeController::class, 'attend']);
    Route::post('/', [TimeController::class, 'leave']);
    Route::post('/',[RestController::class, 'break']);
    Route::post('/',[RestController::class, 'breakEnd']);
    Route::get('/date', [UserController::class, 'index'])->middleware('auth');
});
