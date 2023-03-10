<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UtenteController;
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

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/inscricao-simposio',[UtenteController::class,'index'])->name('simposio');
Route::post('/inscricao-simposio/confirmacao', [UtenteController::class, 'store'])->name('confirm_insc');
Route::get('list_utente/{id}',[UtenteController::class,'listUtente'])->name('list_utente');
