<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        try {
            $images = ProjectImage::with('project')->latest()->paginate(12);
            return view('gallery.index', compact('images'));
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('gallery error: ' . $e->getMessage());

            // Return with empty collection
            $images = new \Illuminate\Pagination\LengthAwarePaginator([], 0, 12);
            return view('gallery.index', compact('images'));
        }
    }

    public function projectGallery($projectId)
    {
        try {
            $project = Project::with('images')->findOrFail($projectId);
            return view('gallery.project', compact('project'));
        } catch (\Exception $e) {
            abort(404, 'Project not found');
        }
    }
}
