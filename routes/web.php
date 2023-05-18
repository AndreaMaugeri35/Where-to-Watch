<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/cinema/index', [CinemaController::class, 'index'])->name('cinema.index');
Route::get('/cinema/create', [CinemaController::class, 'create'])->name('cinema.create');
Route::get('/cinema/show/{cinema}', [CinemaController::class, 'show'])->name('cinema.show');


