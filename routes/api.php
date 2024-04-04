<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ApiCollectionController;

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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('getAllCollections', [CollectionController::class, 'getCollections']);
route::get('getAllCollectionsToo', [CollectionController::class, 'getCollections'])->middleware('auth:sanctum');

route::get('getAllUsers', [UserController::class, 'getUsers']);
route::get('getAllUsersToo', [UserController::class, 'getUsers'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('collections', ApiCollectionController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
