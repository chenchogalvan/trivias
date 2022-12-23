<?php

use App\Http\Controllers\PagesController;
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


Route::get('/test', function (){
    return 'test';
});

Route::get('/vertablas', [PagesController::class, 'tablas'])->name('verTablas');

Route::get('/vertablas/{trivia}', [PagesController::class, 'tablas'])->name('verTablas');


Route::get('/{trivia}', [PagesController::class, 'trivia'])->name('trivia');




Route::post('/store-trivia', [PagesController::class, 'storeTrivia'])->name('storeTrivia');


