<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/homepage', [PublicController::class, 'homepage1'])->name('homepage1');
Route::get('/movies', [PublicController::class, 'all_movies'])->name('movies');
Route::put('/movies/like/{movie}', [PublicController::class, 'like'])->name('like');



Route::post('/contattaci', [PublicController::class, 'contact_us'])->name('contact_us');
Route::get('/movie/show/{movie}', [PublicController::class, 'show'])->name('movie.show');


Route::get('/cinema/index', [CinemaController::class, 'index'])->name('cinema.index');
Route::get('/cinema/create', [CinemaController::class, 'create'])->name('cinema.create');
Route::get('/cinema/show/{cinema}', [CinemaController::class, 'show'])->name('cinema.show');
Route::get('/cinema/edit/{cinema}', [CinemaController::class, 'edit'])->name('cinema.edit');
Route::delete('/cinema/delete', [CinemaController::class, 'destroy'])->name('cinema.delete');
Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
Route::delete('/cinema/profile/delete', [UserController::class, 'destroy'])->name('cinema.profile.delete');

