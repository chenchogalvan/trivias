<?php

use App\Http\Controllers\PagesController;
use App\Models\Respuesta;
use Illuminate\Support\Facades\Route;

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
    return 'hola';
});

Route::get('/{trivia}', [PagesController::class, 'trivia'])->name('trivia');

Route::post('/store-trivia', [PagesController::class, 'storeTrivia'])->name('storeTrivia');

Route::get('/ver-tablas', [PagesController::class, 'trivia'])->name('ver-tablas');

