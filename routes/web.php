<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FencingController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [FencingController::class, 'about'])->name('fencing.about');
Route::get('/techniques', [FencingController::class, 'techniques'])->name('fencing.techniques');
Route::get('/equipment', [FencingController::class, 'equipment'])->name('fencing.equipment');
