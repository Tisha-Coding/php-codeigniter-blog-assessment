<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - BlogVerse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Dark Mode Styles */
        .dark-mode {
            background-color: #121212;
            color: #f1f1f1;
        }

        .dark-mode .navbar, .dark-mode footer {
            background-color: #333;
        }

        .dark-mode .form-control,
        .dark-mode .btn {
            background-color: #444;
            color: white;
        }

        .dark-mode .btn-danger {
            background-color: #ff5733;
        }

        .dark-mode .btn-danger:hover {
            background-color: #c13c2e;
        }

        /* Centering the contact form and styling */
        .contact-form {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 50px auto;
        }

        .contact-form .form-control {
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 1rem;
        }

        /* Dark Mode Styles for the Contact Form */
        .dark-mode .contact-form {
            background-color: #444; /* Darker background for dark mode */
            color: #f1f1f1; /* Ensure text remains visible */
        }

        .contact-form button {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #ff5733; /* Orange color hover */
        }

        /* Form labels */
        .contact-form label {
            font-weight: bold;
        }

        /* Responsive Form Styling */
        @media (max-width: 768px) {
            .contact-form {
                padding: 20px;
            }

            .form-label {
                font-size: 1rem;
            }

            .contact-form button {
                width: 100%;
                font-size: 1.2rem;
            }
        }

        /* Footer Styles */
        footer {
            background-color: #333;
            color: #fff;
            padding: 40px 0;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .footer-social-links a {
            margin: 0 15px;
            font-size: 2rem;
        }

        .footer-social-links a:hover {
            color: #dc3545;
        }

        .subscribe-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .subscribe-btn:hover {
            background-color: #c82333;
        }

        .footer-subscribe {
            margin-top: 20px;
        }

        .footer-social-links a {
            margin: 0 10px;
            color: white;
            font-size: 1.5rem;
        }

        .toggle-theme-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
            cursor: pointer;
            margin-left: 20px;
        }

        .heading-effect {
            position: relative;
            display: inline-block;
            font-size: 2rem;
            font-weight: bold;
            color: black;
        }

        .heading-effect::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 3px;
            background-color: #dc3545;
            bottom: 0;
            left: 0;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease;
        }

        .heading-effect:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .dark-mode .heading-effect {
            color: white !important;
        }

        .dark-mode .heading-effect::after {
            background-color: white;
        }

        .sticky-nav {
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .footer-subscribe .btn {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .footer-subscribe .btn:hover {
            background-color: #c82333;
        }

        .footer-subscribe .form-control {
            border-radius: 5px;
            padding: 10px 15px;
            margin-right: 10px;
        }

        /* Interactive line */
        .interactive-line {
            margin-top: 10px;
            font-size: 1.2rem;
            color: #dc3545;
            opacity: 0;
            animation: showLine 1s ease-in-out forwards;
        }

        @keyframes showLine {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Remove underline by default and add underline on hover */
        ul.list-unstyled li a {
            text-decoration: none;
            transition: text-decoration 0.3s ease;
        }

        ul.list-unstyled li a:hover {
            text-decoration: underline;
        }

        /* Placeholder text color for dark mode */
        .dark-mode .form-control::placeholder {
            color: white !important;
        }

        /* Dark Mode Styles */
        .dark-mode .form-control:focus {
            border-color: #ff5733; /* Orange border */
            box-shadow: 0 0 5px rgba(255, 87, 51, 0.5); /* Orangish glow */
        }

        /* Normal mode focus */
        .form-control:focus {
            border-color: #ff5733; /* Orange border */
            box-shadow: 0 0 5px rgba(255, 87, 51, 0.5); /* Orangish glow */
        }

        /* Active link style */
        .navbar .nav-link.active {
            color: white !important; /* White text for active link */
            background-color: transparent; /* Optional background transparency */
        }

    </style>
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-nav">
    <div class="container">
        <a class="navbar-brand" href="#">BlogVerse</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
    <a class="nav-link <?= uri_string() == 'blog' ? 'active' : '' ?>" href="/blog">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link <?= uri_string() == 'about_us' ? 'active' : '' ?>" href="/about_us">About Us</a>
</li>
<li class="nav-item">
    <a class="nav-link <?= uri_string() == 'contact' ? 'active' : '' ?>" href="/contact">Contact</a>
</li>

                <li class="nav-item nav-links">
                    <form action="/auth/logout" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        <button class="toggle-theme-btn" onclick="toggleDarkMode()">🌙</button>
    </div>
</nav>


    <!-- Contact Form Section -->
    <div class="container">
        <br>
        <h1 class="text-center mb-4">Contact Us</h1>

        <!-- Display Success/Error Messages -->
        <?php if (session()->getFlashdata('contact_success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('contact_success') ?>
            </div>
        <?php elseif (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <!-- Contact Form -->
        <div class="contact-form">
            <form action="/contact" method="POST">
                <?= csrf_field() ?> <!-- CSRF Protection -->
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="name" 
                            name="name" 
                            required 
                            pattern="[A-Za-z]+" 
                            title="The Name field must contain only alphabetic characters without spaces or numbers.">
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-danger w-100">Submit</button>
            </form>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5>About BlogVerse</h5>
                    <p>BlogVerse is your go-to platform for the latest tech news, coding tutorials, and industry updates. We aim to make technology accessible for everyone with practical, easy-to-understand content.</p>
                    <p class="footer-info-bold"><b>Contact Info:</b></p>
                    <p>Thapar University, Patiala, Tisha, 7973208007</p>
                </div>
                <div class="col-md-3 mb-3">
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/blog" class="text-white">Home</a></li>
                        <li><a href="/about_us" class="text-white">About Us</a></li>
                        <li><a href="/contact" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h5>Follow Us</h5>
                    <div class="footer-social-links">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                    <br>
                    <h5>Subscribe</h5>
                    <form action="#" method="post" class="footer-subscribe" onsubmit="return showSuccessPopup();">
                        <div class="input-group">
                            <input type="email" class="form-control email-input" placeholder="Enter your email" required>
                            <button class="subscribe-btn" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; 2025 BlogVerse. All Rights Reserved. Designed with ❤️.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Dark Mode Toggle Script -->
    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            let darkModeStatus = document.body.classList.contains('dark-mode') ? "enabled" : "disabled";

            // Change the emoji based on dark mode status
            const toggleButton = document.querySelector('.toggle-theme-btn');
            if (darkModeStatus === "enabled") {
                toggleButton.innerHTML = "🌞"; // Sun emoji for light mode
            } else {
                toggleButton.innerHTML = "🌙"; // Moon emoji for dark mode
            }

            console.log("Dark mode is now " + darkModeStatus);
        }
    </script>

</body>

</html>
