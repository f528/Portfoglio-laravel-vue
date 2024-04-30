<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('admin', [HomeController::class, 'admin'])->name('admin');
