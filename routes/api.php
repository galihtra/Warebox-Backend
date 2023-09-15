<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NewPasswordController;
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

// logout api route
Route::middleware('auth:sanctum')->group(function() {
    Route::post('/logout',[AuthController::class, 'logout']);
});

// api register route
Route::post('/register',[AuthController::class, 'register']);

// api login route
Route::post('/login',[AuthController::class, 'login']);

// api forgot password
Route::post('forgot-password', [NewPasswordController::class, 'forgotPassword']);

// api reset password
Route::post('reset-password', [NewPasswordController::class, 'reset']);