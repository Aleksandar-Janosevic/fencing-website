<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fencing Projects Gallery</title>
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

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .gallery-item {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            cursor: pointer;
        }

        .gallery-item-info {
            padding: 1rem;
        }

        .gallery-item-info h3 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .gallery-item-info p {
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        /* Lightbox styles */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .lightbox.active {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 40px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 2rem;
        }

        .pagination a,
        .pagination span {
            padding: 0.5rem 1rem;
            background: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #2c3e50;
            text-decoration: none;
        }

        .pagination .active {
            background: #2c3e50;
            color: white;
        }

        .no-images {
            text-align: center;
            padding: 3rem;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
<div class="header">
    <h1>Fencing Projects Gallery</h1>
    <p>Browse our completed fencing installations</p>
</div>

<div class="container">
    @if($images->count() > 0)
        <div class="gallery-grid">
            @foreach($images as $image)
                <div class="gallery-item">
                    <img src="{{ $image->url }}"
                         alt="{{ $image->filename }}"
                         onclick="openLightbox('{{ $image->url }}')">
                    <div class="gallery-item-info">
                        <h3>{{ $image->project->title ?? 'Untitled Project' }}</h3>
                        <p>{{ $image->project->location ?? 'Location not specified' }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            {{ $images->links() }}
        </div>
    @else
        <div class="no-images">
            <h2>No images yet</h2>
            <p>Upload some project images to see them here!</p>
        </div>
    @endif
</div>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <span class="lightbox-close">&times;</span>
    <img id="lightbox-img" src="" alt="Full size image">
</div>

<script>
    function openLightbox(imageUrl) {
        document.getElementById('lightbox').classList.add('active');
        document.getElementById('lightbox-img').src = imageUrl;
    }

    function closeLightbox() {
        document.getElementById('lightbox').classList.remove('active');
    }

    // Close lightbox on Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeLightbox();
        }
    });
</script>
</body>
</html>
