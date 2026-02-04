<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Display all images from all projects
    public function index()
    {
        $images = ProjectImage::with('project')->latest()->paginate(12);
        return view('gallery.index', compact('images'));
    }

    // Display images for a specific project
    public function projectGallery($projectId)
    {
        $project = Project::with('images')->findOrFail($projectId);
        return view('gallery.project', compact('project'));
    }
}
