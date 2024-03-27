<?php

<<<<<<< HEAD
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
=======
use Illuminate\Http\Request;
>>>>>>> parent of 1147a91 (Merge pull request #2 from Tdiouf10/try-to-others-template)
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

<<<<<<< HEAD
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('products')->group(function () {
        Route::get('popular', [ProductController::class, 'popular']);
        Route::get('recommand', [ProductController::class, 'recommanded']);
    });
    Route::apiResource('users', UserController::class);
    Route::apiResource('products', ProductController::class);
=======
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
>>>>>>> parent of 1147a91 (Merge pull request #2 from Tdiouf10/try-to-others-template)
});
