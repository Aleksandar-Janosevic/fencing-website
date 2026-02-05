<!DOCTYPE html>
<html>
<head>
    <title>Create Project</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 50px auto; padding: 20px; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: bold; }
        input, textarea { width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #2c3e50; color: white; padding: 0.75rem 2rem; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #34495e; }
    </style>
</head>
<body>
<h1>Create New Project</h1>

<form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Project Title *</label>
        <input type="text" name="title" required>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" rows="4"></textarea>
    </div>

    <div class="form-group">
        <label>Location</label>
        <input type="text" name="location">
    </div>

    <button type="submit">Create Project & Upload Images</button>
</form>
</body>
</html>
