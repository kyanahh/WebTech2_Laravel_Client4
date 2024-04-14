<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', [UserController::class, 'landingpage'])->name('landing');
Route::get('loginpage', [UserController::class, 'loginpage'])->name('log');
Route::get('createaccount', [UserController::class, 'createaccount'])->name('account');
Route::post('createaccount', [UserController::class, 'createuser'])->name('user');
Route::get('homepage', [UserController::class, 'homepage'])->name('home');
Route::post('loginpage', [UserController::class, 'login'])->name('signin');
Route::post('logout', [UserController::class, 'logout'])->name('signout');
