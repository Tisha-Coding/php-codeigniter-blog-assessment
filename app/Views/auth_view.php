<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login / Signup</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styling */
        body {
            background-color: #212529;
            color: white;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Card Styling */
        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
        }

        .card {
            background-color: #343a40;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            border: none;
            padding: 20px;
        }

        /* Changed background for the heading */
        .card-header {
            background-color: #495057; /* Slightly darker color than the form background */
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 15px 15px 0 0;
        }

        /* Form Styling */
        .form-control {
            background-color: #343a40;
            border: 1px solid #495057;
            color: white;
            border-radius: 10px;
            padding: 12px 15px;
        }

        .form-control:focus {
            background-color: #343a40;
            border-color: #DC3545;
            color: white;
            box-shadow: none;
        }

        .form-label {
            color: #f8f9fa;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .btn-custom {
            background-color: #DC3545;
            color: white;
            border-radius: 10px;
            padding: 12px;
            border: none;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #c82333;
        }

        /* Tabs Styling */
        .btn-group button {
            background-color: transparent;
            color: #f8f9fa;
            border: none;
            border-bottom: 2px solid transparent;
            padding: 10px 0;
            width: 50%;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }

        .btn-group button.active,
        .btn-group button:hover {
            color: white;
            border-bottom: 2px solid #DC3545;
        }

        /* Form Container Toggle */
        .form-container {
            display: none;
        }

        .form-container.active {
            display: block;
        }

        /* Flash Messages */
        .alert {
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .alert-danger {
            background-color: #c82333;
            color: white;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <!-- Changed background color of the heading -->
            <div class="card-header">User Login / Signup</div>
            <div class="card-body">
                <!-- Flash Messages -->
                <?php if (session()->getFlashdata('login_error')) : ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('login_error') ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('login_success')) : ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('login_success') ?>
                    </div>
                <?php endif; ?>

                <!-- Tab Buttons -->
                <div class="btn-group w-100 mb-4">
                    <button id="login-tab" class="btn active">Login</button>
                    <button id="signup-tab" class="btn">Signup</button>
                </div>

                <!-- Login Form -->
                <div id="login-form" class="form-container active">
                    <form action="<?= base_url('/auth/login') ?>" method="POST">
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required placeholder="Email address">
                        </div>
                        <div class="form-group mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-custom w-100">Login</button>
                    </form>
                </div>

                <!-- Signup Form -->
                <div id="signup-form" class="form-container">
                    <form action="<?= base_url('/auth/signup') ?>" method="POST" id="signupForm">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" required placeholder="Your full name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required placeholder="Email address">
                        </div>
                        <div class="form-group mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required placeholder="Create password">
                        </div>
                        <button type="submit" class="btn btn-custom w-100">Signup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Toggle between Login and Signup forms
        document.getElementById('login-tab').addEventListener('click', function () {
            document.getElementById('login-form').classList.add('active');
            document.getElementById('signup-form').classList.remove('active');
            this.classList.add('active');
            document.getElementById('signup-tab').classList.remove('active');
        });

        document.getElementById('signup-tab').addEventListener('click', function () {
            document.getElementById('signup-form').classList.add('active');
            document.getElementById('login-form').classList.remove('active');
            this.classList.add('active');
            document.getElementById('login-tab').classList.remove('active');
        });

        // Validation before submission
        document.getElementById('signupForm').addEventListener('submit', function (event) {
            // Name Validation (Only letters and spaces)
            var name = document.getElementById('name').value;
            var namePattern = /^[A-Za-z\s]+$/;
            if (!namePattern.test(name)) {
                alert('Name can only contain letters and spaces.');
                event.preventDefault();
                return;
            }
        });
    </script>
</body>

</html>
