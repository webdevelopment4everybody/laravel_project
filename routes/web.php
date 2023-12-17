<?php

use App\Http\Controllers\Admin\ConferencesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FormController;
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
//Route::get('/form', [FormController::class, 'index'])->name('form');
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
Route::prefix("form")->group(function () {
    Route::get('/{id}', [FormController::class, 'index'])->name('form.conference');
    Route::post('/create/{id}', [FormController::class, 'create'])->name('form.create');
});
Route::prefix("admin")->group(function () {
    Route::get('/', [ConferencesController::class, 'index'])->name('admin');
    Route::get('/users', [UsersController::class, 'show'])->name('admin.users');
    Route::get('/user/{id}', [UsersController::class, 'showUserInfo'])->name('admin.user');
    Route::put('/user/update/{id}', [UsersController::class, 'update'])->name('admin.user.update');
});
