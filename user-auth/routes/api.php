<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

//rotas de registro
Route::get('/register', [AuthController::class, 'register']);

//rotas de login
Route::get('/login', [AuthController::class, 'login']);

//rotas autenficadas
Route::middleware('auth:api')->group(function () {
    //rotas de logout
    Route::post('/logout', [AuthController::class, 'logout']);

    //rotas do usuario
    Route::get('/me', [AuthController::class, 'me']);
});
