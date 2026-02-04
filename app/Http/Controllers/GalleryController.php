<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;

class GalleryController extends Controller
{
    // Display all images from all projects
    public function index()
    {
        $images = ProjectImage::with('project')
            ->latest()
            ->paginate(12);

        return view('Gallery.index', compact('images'));
    }

    // Display images for a specific project
    public function projectGallery($projectId)
    {
        $project = Project::with('images')->findOrFail($project
