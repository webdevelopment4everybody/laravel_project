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

Route::get('/conference/{id}', [ConferenceController::class, 'index'])->name('conference');
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');

Route::prefix("client")->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client');
    Route::get('form/{id}', [FormController::class, 'index'])->name('form.conference');
    Route::post('form/create/{id}', [FormController::class, 'create'])->name('form.create');
});
Route::prefix("admin")->group(function () {
    Route::get('/', [ConferencesController::class, 'index'])->name('admin');
    Route::get('/users', [UsersController::class, 'show'])->name('admin.users');
    Route::get('/user/{id}', [UsersController::class, 'showUserInfo'])->name('admin.user');
    Route::put('/user/update/{id}', [UsersController::class, 'update'])->name('admin.user.update');

    Route::prefix("conferences")->group(function () {
        Route::get('/', [ConferencesController::class, 'conferences'])->name('admin.conferences');
        Route::delete('/delete', [ConferencesController::class, 'delete'])->name('admin.conference.delete');
        Route::get('/form/{edit?}', [ConferencesController::class, 'showForm'])->name('admin.conference.form');
        Route::post('/create/', [ConferencesController::class, 'create'])->name('admin.conference.create');
    });
});
