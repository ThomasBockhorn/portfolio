<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\admin\ProjectController;
use App\Http\Controllers\Api\guest\ProjectGuestController;

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

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);

//admin routes
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('admin/projects', ProjectController::class)->middleware('XSS');
    Route::post('logout', [UserController::class, 'logout']);
    Route::get('/me', function(Request $request){
        return auth()->user();
    });
});

//guest routes
Route::apiResource('guest/projects', ProjectGuestController::class)->except('store', 'update', 'destroy');