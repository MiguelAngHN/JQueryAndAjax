<?php

use App\Http\Controllers\EjemploController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panel', function () {
    return view('paneles.panel');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/ejemplo2', function () {
    return view('patients');
});

Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/report', [UserController::class, 'report'])->name('users.report');
