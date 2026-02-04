<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = ProjectImage::with('project')->latest()->paginate(12);
        return view('gallery.index', compact('images'));
    }

    public function projectGallery($projectId)
    {
        $project = Project::with('images')->findOrFail($projectId);
        return view('gallery.project', compact('project'));
    }
}
