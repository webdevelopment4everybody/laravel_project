<?php

use App\Enums\UserRoles;
use App\Http\Controllers\Admin\ConferencesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::middleware(["employee_role"])->group(function () {
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
});
Route::middleware(["client_role"])->group(function () {
    Route::prefix("client")->group(function () {
        Route::get('/', [ClientController::class, 'index'])->name('client');
        Route::get('form/{id}', [FormController::class, 'index'])->name('form.conference');
        Route::post('form/create/{id}', [FormController::class, 'create'])->name('form.create');
    });
});
Route::middleware(["auth"])->group(function () {
    Route::post('form/logout', [FormController::class, 'logout'])->name('logout');
});


Route::middleware(["admin_role"])->group(function () {
    Route::prefix("admin")->group(function () {
        Route::get('/', [ConferencesController::class, 'index'])->name('administrator');
        Route::get('/users', [UsersController::class, 'show'])->name('administrator.users');
        Route::get('/user/{id}', [UsersController::class, 'showUserInfo'])->name('administrator.user');
        Route::put('/user/update/{id}', [UsersController::class, 'update'])->name('administrator.user.update');

        Route::prefix("conferences")->group(function () {
            Route::get('/', [ConferencesController::class, 'conferences'])->name('administrator.conferences');
            Route::delete('/delete', [ConferencesController::class, 'delete'])->name('administrator.conference.delete');
            Route::get('/form/{edit?}', [ConferencesController::class, 'showForm'])->name('administrator.conference.form');
            Route::post('/create/', [ConferencesController::class, 'create'])->name('administrator.conference.create');
        });
    });
});
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/create', [RegisterController::class, 'create'])->name('register.user');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/create', [LoginController::class, 'login'])->name('login.user');
