<?php
$pageTitle = "Gallery | DC Cosplay Creatures";

$slides = [
    ["image" => "assets/hero2.png", "alt" => "Hero 2"],
    ["image" => "assets/hero3.png", "alt" => "Hero 3"],
    ["image" => "assets/hero4.png", "alt" => "Hero 4"],
    ["image" => "assets/hero1.png", "alt" => "Hero 1"]
];

$gallery = [
    ["image" => "assets/hero1.png", "category" => "Anime", "name" => "cs1", "series" => "Anime Collection"],
    ["image" => "assets/hero2.png", "category" => "Anime", "name" => "cs2", "series" => "Anime Collection"],
    ["image" => "assets/hero3.png", "category" => "Anime", "name" => "cs3", "series" => "Anime Collection"],
    ["image" => "assets/hero4.png", "category" => "Anime", "name" => "cs4", "series" => "Anime Collection"],

    ["image" => "assets/hero1.png", "category" => "Gaming", "name" => "cs5", "series" => "Gaming Collection"],
    ["image" => "assets/hero2.png", "category" => "Gaming", "name" => "cs6", "series" => "Gaming Collection"],
    ["image" => "assets/hero3.png", "category" => "Gaming", "name" => "cs7", "series" => "Gaming Collection"],
    ["image" => "assets/hero4.png", "category" => "Gaming", "name" => "cs8", "series" => "Gaming Collection"],

    ["image" => "assets/hero1.png", "category" => "Movies", "name" => "cs9", "series" => "Movie Collection"],
    ["image" => "assets/hero2.png", "category" => "Movies", "name" => "cs10", "series" => "Movie Collection"],
    ["image" => "assets/hero3.png", "category" => "Movies", "name" => "cs11", "series" => "Movie Collection"],
    ["image" => "assets/hero4.png", "category" => "Movies", "name" => "cs12", "series" => "Movie Collection"],

    ["image" => "assets/hero1.png", "category" => "Original", "name" => "cs13", "series" => "Original Concept"],
    ["image" => "assets/hero2.png", "category" => "Original", "name" => "cs14", "series" => "Original Concept"],
    ["image" => "assets/hero3.png", "category" => "Original", "name" => "cs15", "series" => "Original Concept"],
    ["image" => "assets/hero4.png", "category" => "Original", "name" => "cs16", "series" => "Original Concept"]
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
    <link rel="stylesheet" href="css/style.css?v=11.0">
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
            <a class="active" href="gallery.php">Gallery</a>
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
        <?php foreach ($slides as $i =>$slide): ?>
            <div class="hero-slide <?= $i === 0 ? 'is-active' : '' ?>" data-slide="<?= $i ?>">
                <div class="media-container">
                    <img src="<?= htmlspecialchars($slide['image']) ?>" alt="<?= htmlspecialchars($slide['alt']) ?>" class="hero-img" loading="eager" decoding="async">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="hero-shade"></div>
    <div class="container hero-content">
        <p class="eyebrow light">OUR GALLERY</p>
        <h1 class="hero-inner-title">Explore Our<br>Costume Gallery</h1>
        <p class="hero-copy">A collection of stunning cosplay looks, creative concepts, and unforgettable moments.</p>
    </div>
    <button class="slider-arrow slider-prev" aria-label="Previous slide">←</button>
    <button class="slider-arrow slider-next" aria-label="Next slide">→</button>
    <div class="slider-dots" aria-label="Choose hero image">
        <?php foreach ($slides as $i =>$_): ?>
            <button class="<?= $i === 0 ? 'active' : '' ?>" data-go-to="<?= $i ?>" aria-label="Show slide <?= $i+1 ?>"></button>
        <?php endforeach; ?>
    </div>
</section>

<section class="section gallery-section">
    <div class="container text-center">
        <p class="eyebrow">CURATED COLLECTIONS</p>
        <h2 class="gallery-heading-title">Curated Collections</h2>
        <p class="section-intro intro-margin-bottom">A glimpse into our stunning collection and past projects.</p>
        
        <div class="filters filters-centered" role="group" aria-label="Filter gallery">
            <button class="filter active" data-filter="All">ALL</button>
            <button class="filter" data-filter="Anime">ANIME</button>
            <button class="filter" data-filter="Gaming">GAMING</button>
            <button class="filter" data-filter="Movies">MOVIES</button>
            <button class="filter" data-filter="Original">ORIGINAL</button>
        </div>

        <div class="gallery-grid">
            <?php foreach ($gallery as$item): ?>
            <article class="gallery-card" data-category="<?= htmlspecialchars($item['category']) ?>">
                <a href="contact.php?costume=<?= urlencode($item['name']) ?>" class="gallery-image">
                    <div class="media-container">
                        <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" class="card-img" loading="lazy" decoding="async">
                    </div>
                </a>
                <div class="gallery-caption">
                    <div>
                        <h3><?= htmlspecialchars($item['name']) ?></h3>
                        <p><?= htmlspecialchars($item['series']) ?></p>
                    </div>
                    <a href="contact.php?costume=<?= urlencode($item['name']) ?>" aria-label="Inquire about <?= htmlspecialchars($item['name']) ?>" class="text-link-gold">→</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
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
            <a href="login.php">Login</a>
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
