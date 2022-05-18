<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('v1/login',[UserController::class,'login']);
Route::post('v1/register',[UserController::class,'register']);
Route::get('v1/getAllProduct',[ProductController::class,'getAllProduct']);
Route::post('v1/order/{id}', [OrderController::class,'order']);
Route::post('v1/createNewProduct/{id}',[ProductController::class,'createNewProduct']);