<?php
$pageTitle = "About Us | DC Cosplay Creatures";

$slides = [
    ["image" => "assets/hero3.png", "alt" => "Hero 3"],
    ["image" => "assets/hero4.png", "alt" => "Hero 4"],
    ["image" => "assets/hero1.png", "alt" => "Hero 1"],
    ["image" => "assets/hero2.png", "alt" => "Hero 2"]
];

$values = [
    ["title" => "Community", "desc" => "We grow stronger when we create together", "icon" => "👥"],
    ["title" => "Creativity", "desc" => "Every costume tells a story", "icon" => "💡"],
    ["title" => "Inclusion", "desc" => "All are welcome", "icon" => "🤍"],
    ["title" => "Passion", "desc" => "We love what we do.", "icon" => "⭐"]
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
    <link rel="stylesheet" href="css/style.css?v=5.0">
    <script src="js/main.js" defer></script>
</head>
<body>
<header class="site-header">
    <nav class="navbar container" aria-label="Main navigation">
        <a class="brand" href="index.php" aria-label="DC Cosplay Creatures home">
            <div class="logo-wrap">
                <img src="assets/DClogo.png" alt="DC Logo" class="brand-logo-img" loading="eager" decoding="async">
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
<section class="hero" id="about-hero">
    <div class="hero-slides" aria-label="Featured cosplay photos">
        <?php foreach ($slides as $i => $slide): ?>
            <div class="hero-slide <?= $i === 0 ? 'is-active' : '' ?>" data-slide="<?= $i ?>">
                <div class="media-container">
                    <img src="<?= htmlspecialchars($slide['image']) ?>" alt="<?= htmlspecialchars($slide['alt']) ?>" class="hero-img" loading="eager" decoding="async">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="hero-shade"></div>
    <div class="container hero-content">
        <p class="eyebrow light">ABOUT US</p>
        <h1 class="hero-inner-title">Passion For<br>Cosplay</h1>
        <p class="hero-copy">DC Cosplay Creatures is a community bringing<br class="desktop-only"> characters to life through cosplay. We believe in<br class="desktop-only"> creativity, and the power of imagination.</p>
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
        <div class="about-story-grid">
            <div class="about-story-copy">
                <p class="eyebrow">OUR STORY</p>
                <h2 class="section-title-uppercase">MORE THAN JUST<br>COSPLAY</h2>
                <p class="about-paragraph">
                    DC Cosplay Creatures is a creative costume and design shop based in Antipolo, specializing in cosplay costumes, gowns, and custom outfit creations to life through detailed craftsmanship, creativity, and passion for wearable art.
                </p>
                <p class="about-paragraph">
                    From fantasy and gaming inspired costumes to special event outfits and themed designs, we work hard to create pieces that help our clients stand out with confidence. Every project is made with care, originality, and attention to detail.
                </p>
            </div>
            <div class="about-story-media">
                <div class="media-container story-image-wrap">
                    <img src="assets/images/gallery/item11.jpg" alt="Our Workshop" class="card-img" loading="lazy" decoding="async">
                </div>
            </div>
        </div>

        <div class="values-card-wrap">
            <p class="eyebrow">OUR VALUES</p>
            <h2 class="values-heading">What Drives Us</h2>
            <div class="values-grid">
                <?php foreach ($values as $index => $val): ?>
                <div class="value-item <?= $index < count($values) - 1 ? 'has-divider' : '' ?>">
                    <div class="value-icon-circle"><?= $val['icon'] ?></div>
                    <h3 class="value-item-title"><?= htmlspecialchars($val['title']) ?></h3>
                    <p class="value-item-desc"><?= htmlspecialchars($val['desc']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
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
                <img src="assets/DClogo.png" alt="DC Logo" class="brand-logo-img" loading="lazy" decoding="async">
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
            <p>☎ &nbsp;+63 9617361552</p>
            <p>☎ &nbsp;+63 9284828706</p>
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
