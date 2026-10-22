<?php
$pageTitle = "Login | DC Cosplay Creatures";
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
            <a class="active" href="login.php">Login</a>
        </div>
        <div class="nav-actions">
            <button class="menu-toggle mobile-only" aria-label="Open navigation" aria-expanded="false">☰</button>
        </div>
    </nav>
</header>

<main class="auth-main-wrapper">
    <div class="auth-bg-overlay"></div>

    <div class="auth-card">
        <form action="login.php" method="POST" class="auth-form">
            <div>
                <label class="form-label">Email / Phone / Username</label>
                <input type="text" name="identity" required class="form-input auth-input">
            </div>

            <div>
                <label class="form-label">Password</label>
                <input type="password" name="password" required class="form-input auth-input">
            </div>

            <div class="auth-forgot-wrap">
                <a href="#" class="auth-forgot-link">Forgot password?</a>
            </div>

            <button type="submit" class="button button-gold button-auth">Log In</button>

            <p class="auth-switch-text">
                Need an account? <a href="register.php">Register</a>
            </p>
        </form>
    </div>
</main>
</body>
</html>
