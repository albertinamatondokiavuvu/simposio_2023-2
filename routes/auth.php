<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


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




Route::get('/login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [LoginController::class,'login']);
Route::post('terminar_sessao', [LoginController::class,'logout'])->name('logout');

// Registration Routes...
Route::get('/cadastrar_usuario', [RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class,'create'])->name('registersote');



// Password Reset Routes...
Route::get('/resetar_palavra_passe', [ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
Route::post('/palavra_passe_email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');
