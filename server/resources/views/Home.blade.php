<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GenZ Vibe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        .card:hover {
            transform: scale(1.02);
            transition: all 0.3s ease-in-out;
        }

        .btn-warning {
            border-radius: 25px;
            font-weight: bold;
        }

        .hero-video {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .video-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">GenZ Vibe</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#trending">Trending</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Banner with Video Background -->
<section class="position-relative text-white text-center py-5" style="overflow: hidden; height: 100vh;">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="hero-video">
        <source src="public/video/7334800-hd_1920_1080_24fps.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Optional Overlay -->
    <div class="video-overlay"></div>

    <!-- Content -->
    <div class="container py-5 d-flex flex-column justify-content-center align-items-center h-100 position-relative" style="z-index: 1;">
        <h1 class="display-4 fw-bold">Welcome to GenZ Vibe</h1>
        <p class="lead">Trends, Tech & Talks – All in One Place</p>
        <a href="#trending" class="btn btn-warning btn-lg mt-3">Explore Now</a>
    </div>
</section>

<!-- Trending Section -->
<section id="trending" class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4 text-center">🔥 Trending Topics</h2>
        <div class="row g-4">
            <?php
                $topics = [
                    ["AI & Future Jobs", "Explore how AI is shaping careers."],
                    ["Sustainable Living", "Simple eco-friendly habits GenZ follows."],
                    ["Creator Economy", "Turn your passion into your paycheck."],
                ];
                foreach ($topics as $topic) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card h-100 shadow-sm">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($topic[0]) . '</h5>';
                    echo '<p class="card-text">' . htmlspecialchars($topic[1]) . '</p>';
                    echo '</div></div></div>';
                }
            ?>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container text-center">
        <h2 class="mb-4">🌟 About GenZ Vibe</h2>
        <p class="lead">GenZ Vibe is a digital hangout spot for the next generation of thinkers, doers, and dreamers. We're all about sharing knowledge, riding trends, and building a future together. From tech to lifestyle, we explore what truly matters to Gen Z.</p>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4">📬 Get in Touch</h2>
        <p class="lead">Got a suggestion, idea, or just want to say hi? We'd love to hear from you!</p>
        <a href="mailto:hello@genzvibe.com" class="btn btn-dark">Email Us</a>
    </div>
</section>

<!-- Footer -->
<footer class="text-center text-white bg-dark py-4">
    <div class="container">
        <p class="mb-0">© <?php echo date("Y"); ?> GenZ Vibe. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
