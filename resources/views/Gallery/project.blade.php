<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} - Gallery</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .header {
            background-color: #2c3e50;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .project-info {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            margin-bottom: 2rem;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }

        .back-link {
            display: inline-block;
            margin-bottom: 1rem;
            color: #2c3e50;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>{{ $project->title }}</h1>
</div>

<div class="container">
    <a href="{{ route('Gallery.index') }}" class="back-link">← Back to Gallery</a>

    <div class="project-info">
        <h2>Project Details</h2>
        <p><strong>Location:</strong> {{ $project->location ?? 'Not specified' }}</p>
        <p><strong>Description:</strong> {{ $project->description ?? 'No description' }}</p>
        <p><strong>Status:</strong> {{ ucfirst($project->status) }}</p>
    </div>

    @if($project->images->count() > 0)
        <div class="gallery-grid">
            @foreach($project->images as $image)
                <div class="gallery-item">
                    <img src="{{ $image->url }}"
                         alt="{{ $image->filename }}"
                         onclick="window.open('{{ $image->url }}', '_blank')">
                </div>
            @endforeach
        </div>
    @else
        <p>No images for this project yet.</p>
    @endif
</div>
</body>
</html>
