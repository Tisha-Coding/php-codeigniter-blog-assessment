<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Blog Posts</title>
    <style>
       .banner {
    background-size: cover;
    background-position: center;
    height: 400px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.banner h1 {
    font-size: 3rem;
    font-weight: bold;
}

.faq-section {
    background-color: #f8f9fa;
    padding: 50px 0;
}

.faq-section.dark-mode {
    background-color: #333;
}

.faq-section h2 {
    color: black;
    font-weight: bold;
    text-transform: uppercase;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    transition: color 0.3s ease;
    text-align: center;
}

.faq-section.dark-mode h2 {
    color: white;
}

.faq-section .accordion-button:not(.collapsed) {
    color: #fff;
    background-color: #dc3545;
}

.dark-mode .accordion-button,
.dark-mode .card,
.dark-mode .card-body {
    background-color: #444;
    color: white;
}

.dark-mode .accordion-button:not(.collapsed) {
    background-color: #dc3545;
}

.dark-mode .faq-section h2 {
    color: white;
}

.testimonial-section {
    background-color: #f8f9fa;
    padding: 50px 0;
}

.testimonial-section.dark-mode {
    background-color: #333;
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

.dark-mode .testimonial-card {
    background-color: #444;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

.testimonial-text {
    font-size: 1rem;
    font-style: italic;
    color: #555;
}

.dark-mode .testimonial-text {
    color: #ddd;
}

.testimonial-author {
    font-weight: bold;
    color: #333;
}

.dark-mode .testimonial-author {
    color: #f1f1f1;
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

.dark-mode .navbar,
.dark-mode footer {
    background-color: #333;
}

.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.read-more-btn {
    background-color: #dc3545;
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

.email-input {
    width: 70%;
    margin-right: 10px;
}

.dark-mode .footer-subscribe input {
    background-color: #444;
    color: white;
    border: 1px solid #555;
}

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

.dark-mode .footer-subscribe input::placeholder {
    color: #fff; /* White color for placeholder text */
    opacity: 0.7; /* Adjust opacity for better readability if needed */
}


.heading-effect:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

.dark-mode .heading-effect {
    color: white;
}

.dark-mode .heading-effect::after {
    background-color: white;
}

.footer-info-bold {
    font-weight: bold;
}

/* .faq-section.dark-mode {
    background-color: #000; /* Pure black */
}

.testimonial-section.dark-mode {
    background-color: #000; /* Pure black */
} */

    </style>
</head>

<body>
    <!-- Navbar Section (Sticky and Dark Theme) -->
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
                    <li class="nav-item nav-links">
                        <form action="/auth/logout" method="post" class="d-inline">
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- Dark Mode Toggle Button -->
            <button class="toggle-theme-btn" onclick="toggleDarkMode()">🌙</button>
        </div>
    </nav>

    <!-- Banner Section -->
    <div class="banner" style="background-image: url('images/blog/blog_home.png');">
        <!-- <div class="container">
            <h1>Welcome to BlogSite</h1>
            <p class="lead">Explore the latest in tech, tutorials, and industry updates. Stay informed, stay ahead.</p>
        </div> -->
    </div>

    <!-- Blog Posts Section -->
    <div class="container my-5">
    <h2 class="text-center mb-5 heading-effect">LATEST BLOG POSTS</h2>
    <div class="row">
        <?php foreach ($blogs as $blog): ?>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <!-- Title Heading -->
                        <!-- <h5 class="card-title"><?= esc($blog['title']) ?></h5> -->

                        <p><strong>Title:</strong> <?= esc($blog['title']) ?></p>
                        <!-- Post Heading -->
                        <p><strong>Content:</strong> <?= substr(esc($blog['content']), 0, 100) ?>...</p>
                        
                        <!-- Content Heading -->
                        <!-- <p><strong>Title:</strong> <?= esc($blog['title']) ?></p> -->
                        
                        <!-- Author and Date Heading -->
                        <p class="card-author">
                            <small><strong>Author:</strong> <?= esc($blog['author']) ?> | <strong>Published on:</strong> <?= date('F j, Y', strtotime($blog['created_at'])) ?></small>
                        </p>
                        <a href="/blog/<?= esc($blog['id']) ?>" class="btn read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>



    <!-- Testimonials Section -->
    <div class="testimonial-section">
        <div class="container">
            <h2 class="text-center mb-5 heading-effect">What Our Readers Say</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <p class="testimonial-text">"BlogVerse has been an invaluable resource for me. The tutorials are easy to follow and incredibly informative!"</p>
                            <p class="testimonial-author">Subham</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <p class="testimonial-text">"I love the tech news updates. They always keep me in the loop with the latest trends and innovations."</p>
                            <p class="testimonial-author">Tisha</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <p class="testimonial-text">"The blog posts are insightful and help me stay ahead in my career. Highly recommend BlogVerse!"</p>
                            <p class="testimonial-author">Ritika</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="faq-section">
        <div class="container">
            <h2 class="text-center mb-5 heading-effect">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is BlogVerse?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            BlogVerse is your go-to platform for the latest tech news, coding tutorials, and industry updates.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How often is content updated?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Content is updated weekly to ensure you get the latest information and trends.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How do I contribute to BlogVerse?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can contribute by submitting articles and tutorials through our contact page.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What type of blog posts can I find on BlogVerse?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We cover a wide range of topics, including tech news, tutorials, reviews, and industry insights.
                        </div>
                    </div>
                </div>
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
    const faqSection = document.querySelector('.faq-section');
    const testimonialSection = document.querySelector('.testimonial-section');

    // Toggle dark mode class for the FAQ and Testimonial sections
    faqSection.classList.toggle('dark-mode');
    testimonialSection.classList.toggle('dark-mode');

    // Change the emoji based on dark mode status
    const toggleButton = document.querySelector('.toggle-theme-btn');
    const darkModeStatus = document.body.classList.contains('dark-mode') ? "enabled" : "disabled";
    toggleButton.innerHTML = darkModeStatus === "enabled" ? "🌞" : "🌙";

    console.log("Dark mode is now " + darkModeStatus);
}

    </script>
</body>

</html>
