<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/client', [ClientController::class, 'index'])->name('client');
Route::get('/conference/{id}', [ConferenceController::class, 'index'])->name('conference');
