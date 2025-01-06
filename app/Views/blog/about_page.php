<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>About Us - BlogVerse</title>
    <style>
        .banner {
            background-size: cover;
            background-position: center;
            height: 400px;
            position: relative;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .banner h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-top: -60px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);  /* Text shadow for better visibility */
        }

        .banner p {
            font-size: 1.5rem;
            color: #f1f1f1;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Shadow on the subheading */
        }

        /* Overlay to darken the background and improve text visibility */
        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);  /* Semi-transparent black overlay */
            z-index: -1;  /* Place the overlay behind the text */
        }

        .dark-mode {
            background-color: #121212;
            color: #f1f1f1;
        }

        .dark-mode .navbar, .dark-mode footer {
            background-color: #333;
        }

        .dark-mode .accordion-button, .dark-mode .card, .dark-mode .card-body {
            background-color: #444;
            color: white;
        }

        .dark-mode .accordion-button:not(.collapsed) {
            background-color: #dc3545;
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
            text-decoration: none; /* No underline by default */
            transition: text-decoration 0.3s ease; /* Smooth transition for underline */
        }

        ul.list-unstyled li a:hover {
            text-decoration: underline; /* Underline on hover */
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
                        <a class="nav-link" href="/blog">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about_us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
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

    <!-- Banner Section -->
    <div class="banner" style="background-image: url('images/blog/about_page.jpg');">
        <div class="container text-center text-white position-relative">
            <!-- <h1 class="display-4 font-weight-bold heading-effect">About Us</h1> -->
            <p class="lead" style="font-size: 1.5rem; color: #f1f1f1;"><b>We are dedicated to providing valuable tech news, tutorials, and industry updates.</b></p>
        </div>
        <div class="banner-overlay"></div> <!-- Overlay for better contrast -->
    </div>

    <!-- About Us Section -->
    <div class="container my-5">
        <h2 class="text-center mb-5 heading-effect">Who We Are</h2>
        <p>At BlogVerse, we aim to make technology accessible to everyone. Our team consists of passionate developers and tech enthusiasts who bring you the latest updates, tutorials, and insights from the world of technology.</p>
        <p>We believe in creating content that is easy to understand, engaging, and informative. Whether you're a beginner or an expert, our posts are designed to cater to all levels of understanding and experience. We focus on delivering high-quality, practical tutorials that are backed by real-world examples and easy-to-follow instructions. Our goal is to make learning about technology fun and accessible to everyone, regardless of their background.</p>
        <p>From coding basics to advanced concepts, we have something for everyone. We also provide insights into the latest tech trends, product reviews, and expert opinions on emerging technologies. Our mission is to help you stay up-to-date and improve your skills in the ever-evolving tech landscape.</p>
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
                            <button class="btn" type="submit">Subscribe</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
