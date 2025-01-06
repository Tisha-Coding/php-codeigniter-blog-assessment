<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Blog Detail - <?= esc($blog['title']) ?></title>
    <style>
        /* Same styles as your provided file for consistency */
        /* General Styles */
body {
    font-family: Arial, sans-serif;
}

/* Sticky Navbar */
.sticky-nav {
    position: sticky;
    top: 0;
    z-index: 100;
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

.dark-mode .faq-section h2 {
    color: white;
}

.dark-mode .heading-effect {
    color: white; /* Change the color to white in dark mode */
}

.dark-mode .heading-effect::after {
    background-color: white; /* Update the underline color to white in dark mode */
}

.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for transform and shadow */
}

.card:hover {
    transform: translateY(-10px); /* Move the card up */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Add a shadow effect */
}

.read-more-btn {
    background-color: #dc3545; /* Same as logout button */
    color: white;
    border: none;
}

.read-more-btn:hover {
    background-color: #bb2d3b;
    color: white;
}

.dark-mode .read-more-btn {
    background-color: #bb2d3b;
    border: none;
}

.dark-mode .read-more-btn:hover {
    background-color: #dc3545;
}

.footer-social-links a {
    margin: 0 10px;
    color: white;
    font-size: 1.5rem;
}

.footer-social-links a:hover {
    color: #dc3545;
}

/* Footer Subscribe Input Styles */
.email-input {
    width: 70%;
    margin-right: 10px;
}

.dark-mode .footer-subscribe input {
    background-color: #444;
    color: white;
    border: 1px solid #555;
}

/* Button styles in dark mode */
.footer-subscribe .btn {
    background-color: #dc3545;
    color: white;
}

.footer-subscribe .btn:hover {
    background-color: #bb2d3b;
}

.footer-subscribe input {
    padding: 10px;
    font-size: 1rem;
}

.footer-subscribe button {
    padding: 10px;
    font-size: 1rem;
}

/* Heading effect */
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

.footer-social-links {
    margin-bottom: 20px;
}

.footer-social-links a {
    font-size: 1.5rem;
}

.sticky-nav {
    position: sticky;
    top: 0;
    z-index: 100;
}

.nav-links {
    margin-right: 20px;
}

.footer-info-bold {
    font-weight: bold;
}

.testimonial-section {
    background-color: #f8f9fa;
    padding: 50px 0;
}

.testimonial-card {
    border: none;
    background-color: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}

.testimonial-text {
    font-size: 1rem;
    font-style: italic;
    color: #555;
}

.testimonial-author {
    font-weight: bold;
    color: #333;
}

/* Useful Links - No Underline by Default */
.footer-social-links a,
.footer-subscribe a {
    text-decoration: none; /* Remove underline */
}

/* Add Underline on Hover */
.footer-social-links a:hover,
.footer-subscribe a:hover {
    text-decoration: underline; /* Underline on hover */
}

/* Dark Mode Email Input Placeholder */
.dark-mode .footer-subscribe input::placeholder {
    color: white; /* Change the placeholder color to white */
}

/* Dark Mode Input Fields */
.dark-mode input, 
.dark-mode textarea {
    background-color: #333;
    color: white;
    border: 1px solid #555;
}

.dark-mode input::placeholder, 
.dark-mode textarea::placeholder {
    color: #aaa;
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
                        <a class="nav-link active" href="/blog">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about_us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <form action="/auth/logout" method="post" class="d-inline">
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- Theme Toggle Button -->
            <button class="toggle-theme-btn" onclick="toggleDarkMode()">🌙</button>
        </div>
    </nav>

     <!-- Blog Details Section -->
    <div class="container my-5">
        <!-- Flash Messages -->
        <?php if (session()->getFlashdata('comment_success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('comment_success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('comment_error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('comment_error') ?>
            </div>
        <?php endif; ?>


        <!-- Blog Details -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h1 class="card-title"><?= esc($blog['title']) ?></h1>
                <p class="card-text"><strong>Author:</strong> <?= esc($blog['author']) ?></p>
                <p class="card-text"><strong>Published on:</strong> <?= esc($blog['created_at']) ?></p>
                <hr>
                <p class="card-text"><strong>Content:</strong> <?= esc($blog['content']) ?></p>
            </div>
        </div>

        <!-- Comment Form -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h3>Leave a Comment</h3>
                <form action="/blog/comment" method="POST">
                    <input type="hidden" name="blog_id" value="<?= esc($blog['id']) ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required pattern="^[A-Za-z\s]+$" title="Name cannot contain numbers or special characters">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="comment" class="form-label">Your Comment</label>
                        <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color:#dc3545; border: 2px solid #dc3545;">Submit</button>
                </form>
            </div>
        </div>

        <!-- Display Comments -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>Comments</h3>
                <?php if (!empty($comments)): ?>
                    <?php foreach ($comments as $comment): ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($comment['name']) ?></h5>
                                <p class="card-text"><?= esc($comment['comment']) ?></p>
                                <small class="text-muted">Commented on: <?= esc($comment['created_at']) ?></small>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No comments yet. Be the first to comment!</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

   
    <!-- Footer Section (Dark Theme) -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5>About BlogVerse</h5>
                    <p>BlogVerse is your go-to platform for the latest tech news, coding tutorials, and industry updates. We aim to make technology accessible for everyone with practical, easy-to-understand content.</p>
                    <p class="footer-info-bold">Contact Info:</p>
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
                    <p></p>
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
