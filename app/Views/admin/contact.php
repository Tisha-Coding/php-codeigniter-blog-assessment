<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Queries</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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

        /* Table Styling */
        .card {
            background-color: #1e1e1e;
            border: none;
        }

        .card-header {
            background-color: #333;
            color: #fff;
        }

        .table thead {
            background-color: #444;
        }

        .table tbody tr {
            background-color: #2a2a2a;
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

        .btn-danger {
            background-color: #ff4d4d;
            border: none;
        }

        .btn-danger:hover {
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

            .table {
                width: 100%; /* Ensure table fits within the container */
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
        <h1 class="text-center mb-4">User Queries</h1>

        <div class="col-md-12 mt-4">
            <?php if (isset($queries) && !empty($queries)) : ?>
                <div class="card">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date Submitted</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($queries as $query) : ?>
                                <tr>
                                    <td><?= esc($query['id']) ?></td>
                                    <td><?= esc($query['name']) ?></td>
                                    <td><?= esc($query['email']) ?></td>
                                    <td><?= esc($query['subject']) ?></td>
                                    <td><?= esc($query['message']) ?></td>
                                    <td><?= esc($query['created_at']) ?></td>
                                    <td>
                                        <a href="/admin/contact/delete/<?= esc($query['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this query?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else : ?>
                <p class="alert alert-info text-dark">No contact queries found.</p>
            <?php endif; ?>
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
