<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use SabastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('authentication.login');
});


Route::get('register', [AuthController::class, 'ShowRegister'])->name('register.form');
Route::post('register', [AuthController::class, 'Register'])->name('register');

Route::get('login', [AuthController::class, 'ShowLogin'])->name('login.form');
Route::post('login', [AuthController::class, 'Login'])->name('login');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');