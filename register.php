<?php
$pageTitle = "Registration | DC Cosplay Creatures";
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
    <link rel="stylesheet" href="css/style.css?v=8.0">
    <script src="js/main.js" defer></script>
</head>
<body class="auth-body">
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
            <a class="active" href="register.php">Login</a>
        </div>
        <div class="nav-actions">
            <button class="menu-toggle mobile-only" aria-label="Open navigation" aria-expanded="false">☰</button>
        </div>
    </nav>
</header>

<main class="auth-main-wrapper">
    <!-- BACKGROUND PICTURE LAYER -->
    <div class="auth-bg-overlay"></div>

    <div class="auth-card">
        <form action="register.php" method="POST" class="auth-form">
            <h2 class="auth-title">Create an Account</h2>

            <div>
                <label class="form-label">Email</label>
                <input type="email" name="email" required class="form-input auth-input">
            </div>

            <div>
                <label class="form-label">Username</label>
                <input type="text" name="username" required class="form-input auth-input">
            </div>

            <div>
                <label class="form-label">Password</label>
                <input type="password" name="password" required class="form-input auth-input">
            </div>

            <div>
                <label class="form-label">Date of Birth</label>
                <div class="auth-dob-grid">
                    <input type="text" name="dob_month" placeholder="Month" class="form-input auth-input">
                    <input type="text" name="dob_day" placeholder="Day" class="form-input auth-input">
                    <input type="text" name="dob_year" placeholder="Year" class="form-input auth-input">
                </div>
            </div>

            <button type="submit" class="button button-gold button-auth">Create Account</button>

            <p class="auth-switch-text">
                Already have an account? <a href="login.php">Log In</a>
            </p>
        </form>
    </div>
</main>
</body>
</html>
