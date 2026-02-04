<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FencingController;
use App\Http\Controllers\ProjectImageController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [FencingController::class, 'about'])->name('fencing.about');
Route::get('/techniques', [FencingController::class, 'techniques'])->name('fencing.techniques');
Route::get('/equipment', [FencingController::class, 'equipment'])->name('fencing.equipment');

Route::middleware(['auth'])->group(function () {
    Route::post('/projects/{project}/images', [ProjectImageController::class, 'store'])->name('projects.images.store');
    Route::delete('/images/{image}', [ProjectImageController::class, 'destroy'])->name('images.destroy');
    Route::get('/projects/{project}/images', [ProjectImageController::class, 'index'])->name('projects.images.index');
});  // ← Added closing parenthesis and semicolon
use App\Http\Controllers\GalleryController;

Route::get('/Gallery', [GalleryController::class, 'index'])->name('Gallery.index');
Route::get('/Gallery/project/{project}', [GalleryController::class, 'projectGallery'])->name('Gallery.project');
Route::middleware(['auth'])->group(function () {
    Route::get('/projects/{project}/upload', function($id) {
        $project = App\Models\Project::findOrFail($id);
        return view('projects.upload', compact('project'));
    })->name('Gallery.project');
});
