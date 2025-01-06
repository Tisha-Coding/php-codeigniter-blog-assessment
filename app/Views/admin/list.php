<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Admin - Blog Management</title>
    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: Arial, sans-serif;
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

        .content {
            margin-left: 260px;
            padding: 20px;
        }

        .navbar {
            background-color: #1f1f1f;
            border-bottom: 1px solid #333;
        }

        .navbar-brand, .nav-link, .btn-danger {
            color: #ddd;
        }

        .navbar-brand:hover, .nav-link:hover, .btn-danger:hover {
            color: #fff;
        }

        .table {
            background-color: #1f1f1f;
            border: 1px solid #333;
        }

        .table th {
            background-color: #2c2c2c;
            color: #ddd;
        }

        .table td {
            background-color: #1f1f1f;
            color: #ddd;
        }

        .table tbody tr:hover {
            background-color: #333;
        }

        .btn-primary {
            background-color: #28a745; /* Green color */
            border: none;
        }

        .btn-primary:hover {
            background-color: #218838; /* Darker green on hover */
        }

        .btn-primary:focus {
            background-color: #218838; /* Darker green on focus */
            border: none; 
            box-shadow: none; /* Remove the blue outline */
            outline: none;
        }

        .btn-primary:active {
    background-color: #1e7e34; /* Even darker green on click */
}
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #a71d2a;
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
        }
    </style>
</head>
<body>
<!-- Sidebar -->
<div class="sidebar">
    <h2>BlogVerse</h2>
    <h4>Admin Elements</h4>
    <a href="/admin/home">Home</a>
    <a href="/admin/add">Add Post</a>
    <a href="/admin/contact">Contact</a>
</div>

<!-- Content -->
<div class="content">
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

    <div class="container my-5">
        <h1 class="text-center mb-4">Blog Management</h1>

        <!-- Alerts -->
        <?php if (session()->has('success')): ?>
            <div class="alert alert-success"><?= session('success') ?></div>
        <?php endif; ?>

        <?php if (session()->has('error')): ?>
            <div class="alert alert-danger"><?= session('error') ?></div>
        <?php endif; ?>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>S. No.</th>
                <th>Title</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($blogs)): ?>
                <?php foreach ($blogs as $index => $blog): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($blog['title']) ?></td>
                        <td><?= esc($blog['author']) ?></td>
                        <td>
                            <a href="/admin/edit/<?= esc($blog['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="/admin/delete/<?= esc($blog['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog post?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">No blog posts available.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
