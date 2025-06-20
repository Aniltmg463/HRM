<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PageController;
use App\Http\Controllers\Auth\forgetpasswordController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/forgetpassword', [forgetpasswordController::class, 'create'])->name('forget');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//forget password
Route::get('/forgot', [LoginController::class, 'ShowForgetPasswordForm'])->name('auth.forgetpassword');
Route::post('/forgot', [LoginController::class, 'SubmitForgetPasswordForm'])->name('auth.Submitforgetpassword');
Route::get('/reset-password/{token}', [LoginController::class, 'ShowResetPasswordForm'])->name('auth.showresetpassword');

Route::get('/reset-password/{token}', [LoginController::class, 'ShowResetPasswordForm'])->name('auth.Submitresetpassword');
// Route::get('/reset-password', [LoginController::class, 'ShowResetPasswordForm'])->name('auth.showpassword');

Route::post('/reset-password', [LoginController::class, 'SubmitResetPasswordForm'])->name('auth.Submitresetpassword');
