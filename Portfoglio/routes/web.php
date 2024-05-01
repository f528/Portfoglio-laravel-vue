<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Auth::routes();


Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
Route::get('/resume', [ResumeController::class, 'resume'])->name('resume');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/project', [ProjectController::class, 'project'])->name('project');

