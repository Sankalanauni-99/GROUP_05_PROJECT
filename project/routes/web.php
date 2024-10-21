<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/users', [AuthManager::class, 'loadAllUsers'])->name('users');
Route::get('/login', [AuthManager::class,'login'])->name('login');
Route::post('/login', [AuthManager::class,'loginPost'])->name('login.Post');
Route::get('/registration',[AuthManager::class,'registration'])->name('registration');
Route::post('/registration', [AuthManager::class,'registrationPost'])->name('registration.Post');
Route::get('/logout',[AuthManager::class,'logout'])->name('logout');


Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');

