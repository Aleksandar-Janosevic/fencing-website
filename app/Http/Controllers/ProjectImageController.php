<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectImageController extends Controller
{
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

        $image = ProjectImage::create([
            'project_id' => $project->id,
            'filename' => $file->getClientOriginalName(),
            'path' => $path,
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'url' => $url
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Image uploaded successfully',
            'image' => $image
        ], 201);
    }

    public function destroy(ProjectImage $image)
    {
        Storage::disk('s3')->delete($image->path);
        $image->delete();

        return response()->json([
            'success' => true,
            'message' => 'Image deleted successfully'
        ]);
    }

    public function index(Project $project)
    {
        return response()->json([
            'images' => $project->images
        ]);
    }
}
