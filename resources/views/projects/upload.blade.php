<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images - {{ $project->title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .project-info {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 4px;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #2c3e50;
        }

        input[type="file"] {
            width: 100%;
            padding: 0.5rem;
            border: 2px dashed #ddd;
            border-radius: 4px;
            cursor: pointer;
        }

        button {
            background-color: #2c3e50;
            color: white;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            background-color: #34495e;
        }

        .alert {
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 4px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .uploaded-images {
            margin-top: 2rem;
        }

        .image-preview {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }

        .image-preview img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 4px;
        }

        .links {
            margin-top: 2rem;
            display: flex;
            gap: 1rem;
        }

        .link-btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .link-btn:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Upload Images</h1>

    <div class="project-info">
        <h3>{{ $project->title }}</h3>
        <p><strong>Location:</strong> {{ $project->location ?? 'Not specified' }}</p>
        <p><strong>Description:</strong> {{ $project->description ?? 'No description' }}</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-error">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('projects.images.store', $project->id) }}"
          method="POST"
          enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="image">Select Image to Upload:</label>
            <input type="file"
                   name="image"
                   id="image"
                   accept="image/*"
                   required>
            <small style="color: #666;">Max size: 5MB. Formats: JPG, PNG, GIF, WEBP</small>
        </div>

        <button type="submit">Upload Image</button>
    </form>

    @if($project->images->count() > 0)
        <div class="uploaded-images">
            <h3>Uploaded Images ({{ $project->images->count() }})</h3>
            <div class="image-preview">
                @foreach($project->images as $image)
                    <div>
                        <img src="{{ $image->url }}" alt="{{ $image->filename }}">
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <div class="links">
        <a href="{{ route('gallery.index') }}" class="link-btn">View Gallery</a>
        <a href="{{ route('admin.projects.create') }}" class="link-btn">Create Another Project</a>
    </div>
</div>
</body>
</html>
