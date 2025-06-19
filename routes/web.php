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
