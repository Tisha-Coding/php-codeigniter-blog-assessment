<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login / Signup</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styling */
        body {
            background-color: #121212;
            color: #fff;
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
            background-color: #1e1e1e;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            border: none;
            padding: 20px;
        }

        .card-header {
            background-color: #333333;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 15px 15px 0 0;
        }

        /* Form Styling */
        .form-control {
            background-color: #2a2a2a;
            border: 1px solid #444;
            color: #ddd;
            border-radius: 10px;
            padding: 12px 15px;
        }

        .form-control:focus {
            background-color: #333;
            border-color: #555;
            color: #fff;
            box-shadow: none;
        }

        .form-label {
            color: #bbb;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .btn-custom {
            background-color: #ff4d4d;
            color: white;
            border-radius: 10px;
            padding: 12px;
            border: none;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #a71d2a;
        }

        /* Tabs Styling */
        .btn-group button {
            background-color: transparent;
            color: #bbb;
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
            border-bottom: 2px solid #ff4d4d;
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
            background-color: #b71c1c;
            color: #fff;
        }

        .alert-success {
            background-color: #2e7d32;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Admin Login / Signup</div>
            <div class="card-body">
                <!-- Flash Messages -->
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

                <!-- Tab Buttons -->
                <div class="btn-group w-100 mb-4">
                    <button id="login-tab" class="btn active">Login</button>
                    <button id="signup-tab" class="btn">Signup</button>
                </div>

                <!-- Login Form -->
                <div id="login-form" class="form-container active">
                    <form action="<?= base_url('admin/login') ?>" method="POST">
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
                    <form action="<?= base_url('admin/signup') ?>" method="POST" id="signupForm">
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
