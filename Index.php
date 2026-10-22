<?php
$pageTitle = "DC Cosplay Creatures | Dress. Play. Inspire.";

$slides = [
    ["image" => "assets/hero1.png", "alt" => "Hero 1"],
    ["image" => "assets/hero2.png", "alt" => "Hero 2"],
    ["image" => "assets/hero3.png", "alt" => "Hero 3"],
    ["image" => "assets/hero4.png", "alt" => "Hero 4"]
];

$featuredMain = [
    "image" => "assets/home1.jpg",
    "name" => "Sabertooth Warrior",
    "series" => "Original Concept"
];

$featuredGrid = [
    ["image" => "assets/home2.jpg", "name" => "#", "series" => "Fantasy"],
    ["image" => "assets/home3.jpg", "name" => "#", "series" => "Original"],
    ["image" => "assets/home5.jpg", "name" => "#", "series" => "Original"],
    ["image" => "assets/home6.jpg", "name" => "#", "series" => "Fantasy"]
];

$services = [
    ["image" => "assets/images/services/rental.jpg", "title" => "Rental", "desc" => "High-quality costumes for any event."],
    ["image" => "assets/images/services/custom.jpg", "title" => "Custom Design", "desc" => "Turn your ideas into one-of-a-kind creations."],
    ["image" => "assets/images/services/props.jpg", "title" => "Wigs & Props", "desc" => "Premium wigs, props, and styling accessories."]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=4.0">
    <script src="js/main.js" defer></script>
</head>
<body>
<header class="site-header">
    <nav class="navbar container" aria-label="Main navigation">
        <a class="brand" href="index.php" aria-label="DC Cosplay Creatures home">
            <div class="logo-wrap">
                <img src="assets/DClogo.png" alt="DC Logo" width="36" height="36" loading="eager" decoding="async" onerror="this.style.display='none'">
            </div>
            <span>DC COSPLAY<br>CREATURES</span>
        </a>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
        </div>
        <div class="nav-actions">
            <button class="menu-toggle mobile-only" aria-label="Open navigation" aria-expanded="false">☰</button>
        </div>
    </nav>
</header>

<main>
<section class="hero" id="home">
    <div class="hero-slides" aria-label="Featured cosplay photos">
        <?php foreach ($slides as $i => $slide): ?>
            <div class="hero-slide <?= $i === 0 ? 'is-active' : '' ?>" data-slide="<?= $i ?>">
                <div class="media-container">
                    <img src="<?= htmlspecialchars($slide['image']) ?>" alt="<?= htmlspecialchars($slide['alt']) ?>" width="1920" height="1080" loading="eager" decoding="async" onerror="this.style.display='none'">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="hero-shade"></div>
    <div class="container hero-content">
        <p class="eyebrow light">DC COSPLAY CREATURES</p>
        <h1>Dress, Play,<br>Inspire</h1>
        <p class="hero-copy">Costume rentals, designs, and<br class="desktop-only"> styling services for every occasion.<br>Open for all Ages.</p>
        <div class="hero-buttons">
            <a class="button button-gold" href="gallery.php">Browse Gallery</a>
            <a class="button button-gold" href="contact.php">Get in Touch</a>
        </div>
    </div>
    <button class="slider-arrow slider-prev" aria-label="Previous slide">←</button>
    <button class="slider-arrow slider-next" aria-label="Next slide">→</button>
    <div class="slider-dots" aria-label="Choose hero image">
        <?php foreach ($slides as $i => $_): ?>
            <button class="<?= $i === 0 ? 'active' : '' ?>" data-go-to="<?= $i ?>" aria-label="Show slide <?= $i+1 ?>"></button>
        <?php endforeach; ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="heading-row heading-featured">
            <div>
                <p class="eyebrow">FEATURED</p>
                <h2 class="section-title-uppercase">Featured Collections</h2>
                <p class="section-intro">We bring characters to life with intricate craftsmanship and attention to detail.</p>
            </div>
            <a class="text-link text-link-gold" href="gallery.php">View all →</a>
        </div>

        <div class="featured-layout">
            <div class="gallery-card featured-main-card">
                <a href="gallery.php" class="gallery-image gallery-image-large">
                    <div class="media-container">
                        <img src="<?= htmlspecialchars($featuredMain['image']) ?>" alt="<?= htmlspecialchars($featuredMain['name']) ?>" width="600" height="800" loading="lazy" decoding="async" onerror="this.style.display='none'">
                    </div>
                </a>
            </div>

            <div class="featured-right-grid">
                <?php foreach ($featuredGrid as $item): ?>
                <div class="gallery-card">
                    <a href="gallery.php" class="gallery-image gallery-image-small">
                        <div class="media-container">
                            <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" width="300" height="300" loading="lazy" decoding="async" onerror="this.style.display='none'">
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="section services-section">
    <div class="container">
        <div class="heading-row heading-services">
            <div class="section-heading">
                <p class="eyebrow">OUR SERVICES</p>
                <h2 class="section-title-uppercase">More Than Just Costumes</h2>
                <p class="section-intro">We offer a variety of services to make your cosplay dreams come true.</p>
            </div>
        </div>

        <div class="services-photo-grid">
            <?php foreach ($services as $service): ?>
            <div class="gallery-card">
                <a href="contact.php" class="gallery-image gallery-image-service">
                    <div class="media-container">
                        <img src="<?= htmlspecialchars($service['image']) ?>" alt="<?= htmlspecialchars($service['title']) ?>" width="400" height="500" loading="lazy" decoding="async" onerror="this.style.display='none'">
                    </div>
                </a>
                <div class="gallery-caption service-caption">
                    <div>
                        <h3 class="service-title"><?= htmlspecialchars($service['title']) ?></h3>
                        <p class="service-desc"><?= htmlspecialchars($service['desc']) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-banner container cta-banner-custom">
    <div class="cta-copy cta-copy-custom">
        <h2 class="cta-heading">Ready for your first fit?</h2>
        <p class="cta-desc">Join the community, or book a studio session.</p>
    </div>
    <div class="cta-action-wrap">
        <a class="button button-gold button-gold-cta" href="contact.php">Get in touch</a>
    </div>
</section>
</main>

<footer class="footer footer-spaced">
    <div class="container footer-main">
        <a class="brand footer-brand" href="index.php">
            <div class="logo-wrap">
                <img src="assets/DClogo.png" alt="DC Logo" width="36" height="36" loading="lazy" decoding="async" onerror="this.style.display='none'">
            </div>
            <span>DC COSPLAY<br>CREATURES</span>
        </a>
        <div class="footer-nav">
            <h4>Navigate</h4>
            <a href="index.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="footer-contact">
            <h4>Contact</h4>
            <p>☎ &nbsp;+63 912 345 6789</p>
            <p>✉ &nbsp;dc.cosplaycreatures@gmail.com</p>
            <p>⌖ &nbsp;Maria Corazon Dos Brgy. Sta Cruz A.C</p>
        </div>
        <div class="socials">
            <h4>Follow Us</h4>
            <a href="https://www.facebook.com/profile.php?id=100064195204727" aria-label="Facebook" target="_blank">f</a>
        </div>
    </div>
    <div class="container footer-bottom">
        <span>© <?= date('Y') ?> DC Cosplay Creatures. All rights reserved.</span>
        <span>Dream &nbsp;·&nbsp; Cosplay &nbsp;·&nbsp; Become</span>
    </div>
</footer>
</body>
</html>
