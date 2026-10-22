<?php
$pageTitle = "Contact & Booking | DC Cosplay Creatures";

$slides = [
    ["image" => "assets/hero4.png", "alt" => "Hero 4"],
    ["image" => "assets/hero1.png", "alt" => "Hero 1"],
    ["image" => "assets/hero2.png", "alt" => "Hero 2"],
    ["image" => "assets/hero3.png", "alt" => "Hero 3"]
];

$selectedCostume = $_GET['costume'] ?? '';
$submitted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submitted = true;
}
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
    <link rel="stylesheet" href="css/style.css?v=6.0">
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
<section class="hero" id="home">
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
        <p class="eyebrow light">GET IN TOUCH</p>
        <h1 class="hero-inner-title">Let's Create<br>Something Amazing</h1>
        <p class="hero-copy">We'd love to hear from you. Send us<br class="desktop-only"> a message and we'll get back to you<br class="desktop-only"> as soon as possible.</p>
    </div>
    <button class="slider-arrow slider-prev" aria-label="Previous slide">←</button>
    <button class="slider-arrow slider-next" aria-label="Next slide">→</button>
    <div class="slider-dots" aria-label="Choose hero image">
        <?php foreach ($slides as $i => $_): ?>
            <button class="<?= $i === 0 ? 'active' : '' ?>" data-go-to="<?= $i ?>" aria-label="Show slide <?= $i+1 ?>"></button>
        <?php endforeach; ?>
    </div>
</section>

<section class="section" id="contact">
    <div class="container contact-grid">
        <!-- LEFT INFO COLUMN -->
        <div class="contact-left-col">
            <p class="eyebrow">CONTACT US</p>
            <h2 class="section-title-uppercase">SEND US A MESSAGE</h2>

            <div class="contact-info-list">
                <div class="contact-info-item">
                    <div class="contact-icon-circle">📍</div>
                    <div>
                        <h3 class="contact-item-title">Our Location</h3>
                        <p class="contact-item-desc">Maria Corazon Dos Brgy. Sta.<br>Cruz A.C</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-icon-circle">📞</div>
                    <div>
                        <h3 class="contact-item-title">Phone</h3>
                        <p class="contact-item-desc">+ 63 9617361552<br>+ 63 9284828706</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-icon-circle">🕒</div>
                    <div>
                        <h3 class="contact-item-title">Business Hours</h3>
                        <p class="contact-item-desc">Mon-Sat: 7AM-7PM<br>Sun:10AM-5PM</p>
                    </div>
                </div>
            </div>

            <div class="contact-social-block">
                <p class="eyebrow-bold">FOLLOW <span class="eyebrow-dark">US</span></p>
                <div class="socials">
                    <a href="https://www.facebook.com/profile.php?id=100064195204727" aria-label="Facebook" target="_blank">f</a>
                </div>
                <p class="contact-subtext">Stay updated with our latest projects.</p>
            </div>
        </div>

        <!-- RIGHT FORM CARD -->
        <div class="contact-card-form">
            <?php if ($submitted): ?>
                <div class="form-success-box">
                    <h3 class="form-success-title">Message Sent Successfully!</h3>
                    <p class="form-success-desc">Thank you for reaching out. Our team will get back to you as soon as possible.</p>
                </div>
            <?php else: ?>
                <form method="POST" action="contact.php" class="contact-form">
                    <h2 class="form-title">Drop us a message</h2>
                    <p class="form-subheading">Fill out the form below and we'll get back to you as soon as possible.</p>
                    
                    <div>
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" required class="form-input" placeholder="Your full name">
                    </div>

                    <div>
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" required class="form-input" placeholder="Your email address">
                    </div>

                    <div>
                        <label class="form-label">Subject</label>
                        <select name="subject" class="form-input form-select" required>
                            <option value="" disabled selected>Drop down menu to</option>
                            <option value="Rental">Costume Rental Inquiry</option>
                            <option value="Custom Design">Custom Design / Commission</option>
                            <option value="Wigs & Props">Wigs & Props</option>
                            <option value="General">General Inquiry</option>
                        </select>
                    </div>

                    <?php if (!empty($selectedCostume)): ?>
                    <div>
                        <label class="form-label">Selected Costume</label>
                        <input type="text" name="costume" value="<?= htmlspecialchars($selectedCostume) ?>" readonly class="form-input form-input-readonly">
                    </div>
                    <?php endif; ?>

                    <div>
                        <label class="form-label">Message</label>
                        <textarea name="message" rows="4" required class="form-input form-textarea" placeholder="Your message details..."></textarea>
                    </div>

                    <button type="submit" class="button button-gold button-submit-gold">Send Message <span class="arrow-icon">➤</span></button>
                </form>
            <?php endif; ?>
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
