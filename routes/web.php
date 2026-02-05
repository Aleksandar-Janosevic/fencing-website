<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FencingController;
use App\Http\Controllers\ProjectImageController;
use App\Http\Controllers\GalleryController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [FencingController::class, 'about'])->name('fencing.about');
Route::get('/techniques', [FencingController::class, 'techniques'])->name('fencing.techniques');
Route::get('/equipment', [FencingController::class, 'equipment'])->name('fencing.equipment');

// Gallery routes (public access)
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/project/{project}', [GalleryController::class, 'projectGallery'])->name('gallery.project');

// Simple admin routes (no auth for now - add later if needed)
Route::get('/admin/projects/create', function() {
    return view('admin.create-project');
})->name('admin.projects.create');

Route::post('/admin/projects', function(\Illuminate\Http\Request $request) {
    $request->validate([
        'title' => 'required',
        'description' => 'nullable',
        'location' => 'nullable',
    ]);

    // Get first user or create one
    $user = \App\Models\User::first();
    if (!$user) {
        $user = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password')
        ]);
    }

    $project = \App\Models\Project::create([
        'user_id' => $user->id,
        'title' => $request->title,
        'description' => $request->description,
        'location' => $request->location,
        'status' => 'completed'
    ]);

    return redirect()->route('projects.upload', $project->id)
        ->with('success', 'Project created! Now upload images.');
})->name('admin.projects.store');

// Upload route (can be public for now, add auth later)
Route::get('/projects/{project}/upload', function($id) {
    $project = App\Models\Project::findOrFail($id);
    return view('projects.upload', compact('project'));
})->name('projects.upload');

// Protected routes (require authentication)
Route::middleware(['auth'])->group(function () {
    Route::post('/projects/{project}/images', [ProjectImageController::class, 'store'])->name('projects.images.store');
    Route::delete('/images/{image}', [ProjectImageController::class, 'destroy'])->name('images.destroy');
    Route::get('/projects/{project}/images', [ProjectImageController::class, 'index'])->name('projects.images.index');
});
