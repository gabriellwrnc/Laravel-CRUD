<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ShowCustomerController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/show_customer', ShowCustomerController::class);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user_profile', [AuthController::class, 'user_profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
