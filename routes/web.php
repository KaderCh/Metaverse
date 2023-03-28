<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jeuController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\catalogueController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', [indexController::class, 'index'])->name('Accueil');
Route::get('contact', [contactController::class, 'contact'])->name('Contact');
Route::get('catalogue', [catalogueController::class, 'catalogue'])->name('catalogue');
Route::get('reserver', [ReservationController::class, 'show'])->name('reserver');
Route::get('jeu/{id}',[jeuController::class,'show'])->name("jeu");
Route::post('reserver',[ReservationController::class,'recupPlaces'])->name("places");

?>
