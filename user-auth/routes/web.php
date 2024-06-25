<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//rotas de registro
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

//rotas de index do usuário
Route::get('users', [AuthController::class, 'index'])->name('users.index');

//rotas de usuário
Route::get('user/{id}', [AuthController::class, 'show'])->name('user.show');

//rota de exclusão de usuario
Route::delete('user/{id}', [AuthController::class, 'destroy'])->name('user.destroy');
