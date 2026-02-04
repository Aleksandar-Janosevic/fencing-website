<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectImageController extends Controller
{
    // Store/upload a new image
    public function store(Request $request, Project $project)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
        ]);

        $file = $request->file('image');

        $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();

        $path = Storage::disk('s3')->putFileAs(
            'fencing-projects/' . $project->id,
            $file,
            $filename,
            'public'
        );

        $url = Storage::disk('s3')->url($path);

        ProjectImage::create([
            'project_id' => $project->id,
            'filename' => $file->getClientOriginalName(),
            'path' => $path,
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'url' => $url
        ]);

        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }

    // Delete an image
    public function destroy(ProjectImage $image)
    {
        Storage::disk('s3')->delete($image->path);
        $image->delete();

        return response()->json([
            'success' => true,
            'message' => 'Image deleted successfully'
        ]);
    }

    // Get all images for a project
    public function index(Project $project)
    {
        return response()->json([
            'images' => $project->images
        ]);
    }
}
