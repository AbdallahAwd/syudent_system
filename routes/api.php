<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Abdullah
Route::post('/register', [RegisterController::class, 'create']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');
Route::put('/user/update', [UpdateController::class, 'updateUser'])->middleware('auth:sanctum');
Route::put('/password/update', [UpdateController::class, 'updatePassword'])->middleware('auth:sanctum');
Route::get('/users/search', [UpdateController::class, 'search'])->middleware('auth:sanctum');
Route::get('/users/user/info/{id}', [UpdateController::class, 'userInfo'])->middleware('auth:sanctum');
Route::delete('/users/delete/{id}', [LoginController::class, 'delete'])->middleware('auth:sanctum');