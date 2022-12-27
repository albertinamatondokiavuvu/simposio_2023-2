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

Route::middleware('auth')->group(function () {
Route::get('/simposio/listar/{id}',[UtenteController::class,'list'])->name('listarSimposio');
Route::get('/simposio/cartao/{id}',[UtenteController::class,'cartao'])->name('cartaoSimposio');
Route::get('/simposio/certificado/{id}',[UtenteController::class,'certificado'])->name('certificadoSimposio');
});
