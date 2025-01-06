<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Add Blog Post</title>
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #1f1f1f;
            padding-top: 20px;
        }

        .sidebar h2, .sidebar h4 {
            text-align: center;
            color: #fff;
            margin-bottom: 15px;
        }

        /* .sidebar h2 {
            font-size: 24px;
        } */

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #ddd;
            display: block;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background-color: #333;
            color: #fff;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            padding-top: 70px; /* Ensure space for navbar */
        }

        .navbar {
            background-color: #1f1f1f;
            border-bottom: 1px solid #333;
            position: fixed;
            top: 0;
            left: 250px; /* Start after sidebar */
            width: calc(100% - 250px);
            z-index: 1000;
        }

        .navbar-brand, .nav-link, .btn-danger {
            color: #ddd;
        }

        .navbar-brand:hover, .nav-link:hover, .btn-danger:hover {
            color: #fff;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #1f1f1f;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .form-container .btn {
            background-color: #ff4d4d;
            border: 2px solid #ff4d4d;
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

        @media (max-width: 768px) {
            .content {
                margin-left: 0;
            }

            .sidebar {
                position: relative;
                height: auto;
                width: 100%;
            }

            .sidebar a {
                text-align: center;
                padding: 15px;
            }

            .navbar {
                left: 0;
                width: 100%;
            }
        }

        .btn-orange {
    background-color: #ff5733; /* Orange color */
    border: 2px solid #ff5733; /* Orange border */
}

.btn-orange:hover {
    background-color: #ff704d; /* Lighter orange on hover */
    border-color: #ff704d; /* Lighter orange border on hover */
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
        <h1 class="text-center mb-4">Add Blog Post</h1>
        <div class="form-container card shadow-sm">
            <form action="/admin/store" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" required pattern="^[A-Za-z\s]+$" title="Name cannot contain numbers or special characters">
                </div>
                <button type="submit" class="btn btn-danger">Add Post</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
