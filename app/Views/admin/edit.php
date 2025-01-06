<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Edit Blog Post</title>
    <style>
        /* General Styling */
        body {
            background-color: #121212;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        /* Sidebar Styling */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #1f1f1f;
            padding-top: 20px;
            transition: all 0.3s ease-in-out;
        }

        .sidebar h2, .sidebar h4 {
            text-align: center;
            color: #fff;
            margin-bottom: 15px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #ddd;
            display: block;
        }

        .sidebar a:hover {
            background-color: #333;
            color: #fff;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #1f1f1f;
            border-bottom: 1px solid #333;
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            z-index: 1030;
            border-radius: 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: left 0.3s ease-in-out;
        }

        .navbar-brand, .nav-link, .btn-danger {
            color: #ddd;
        }

        .navbar-brand:hover, .nav-link:hover, .btn-danger:hover {
            color: #fff;
        }

        /* Content Styling */
        .content {
            margin-left: 250px;
            margin-top: 60px;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }

        .form-wrapper {
            max-width: 600px;
            margin: 0 auto;
        }

        .card {
            background-color: #1e1e1e;
            border: none;
        }

        .form-label {
            color: #ddd;
        }

        .form-control {
            background-color: #2a2a2a;
            color: #ddd;
            border: 1px solid #444;
        }

        .form-control:focus {
            background-color: #333;
            color: #fff;
            border-color: #555;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #ff4d4d;
            border: none;
        }

        .btn-primary:hover {
            background-color: #a71d2a;
        }

        /* Mobile View Adjustments */
        @media (max-width: 992px) {
            .sidebar {
                position: absolute;
                left: -250px; /* Hide sidebar by default on smaller screens */
                width: 250px;
            }

            .sidebar.active {
                left: 0; /* Show sidebar when active */
            }

            .navbar {
                left: 0;
            }

            .content {
                margin-left: 0;
            }

            .navbar-toggler {
                margin-left: auto;
            }
        }

        /* Sidebar Toggle Button */
        .sidebar-toggle {
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1050;
            cursor: pointer;
            display: none;
            color: #fff;
        }

        @media (max-width: 992px) {
            .sidebar-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <h2>BlogVerse</h2>
    <h4>Admin Elements</h4>
    <a href="/admin/home">Home</a>
    <a href="/admin/add">Add Post</a>
    <a href="/admin/contact">Contact</a>
</div>

<!-- Sidebar Toggle Button -->
<div class="sidebar-toggle" id="sidebarToggle">
    ☰
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <form action="/admin/logout" method="post">
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="content">
    <div class="container my-5">
        <h1 class="text-center mb-4">Edit Blog Post</h1>
        <div class="form-wrapper">
            <form action="/admin/update/<?= esc($blog['id']) ?>" method="POST" class="card p-4 shadow-sm">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= esc($blog['title']) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required><?= esc($blog['content']) ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="<?= esc($blog['author']) ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Post</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Sidebar toggle functionality
    document.getElementById('sidebarToggle').addEventListener('click', function () {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    });
</script>
</body>
</html>
