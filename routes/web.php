<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\HistoriaController;
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

Route::view('/', 'home');

Route::post('/Historia/Enviar', [HistoriaController::class, 'index']);

Route::get('/GeraAvalia', [HistoriaController::class, 'randomHist']);

Route::get('/historia/destroy/{id}', [HistoriaController::class, 'deleteHist']);
