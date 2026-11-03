<?php
$pageTitle = "Forgot Password | DC Cosplay Creatures";
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
    <link rel="stylesheet" href="css/style.css?v=11.0">
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
        <div class="auth-card-header">
            <h2>Reset Password</h2>
            <a href="login.php" class="auth-close-btn" aria-label="Close modal">✕</a>
        </div>

        <?php if ($submitted): ?>
            <div class="auth-success-message">
                <h3>Verification Code Sent!</h3>
                <p>We sent a 6-digit verification code to your phone number. Check your messages to reset your password.</p>
                <a href="login.php" class="button button-gold button-auth">Back to Login</a>
            </div>
        <?php else: ?>
            <form action="forgot-password.php" method="POST" class="auth-form">
                <p class="auth-subtext-white">Enter your registered phone number below and we'll send you an SMS code to recover your account.</p>

                <div>
                    <label class="form-label">Phone Number</label>
                    <input type="tel" name="phone" required class="form-input auth-input" placeholder="+63 912 345 6789">
                </div>

                <button type="submit" class="button button-gold button-auth">Send Recovery Code</button>

                <p class="auth-switch-text">
                    Remembered your password? <a href="login.php">Log In</a>
                </p>
                <p class="auth-switch-text">
                    Don't have an account? <a href="register.php">Create one</a>
                </p>
            </form>
        <?php endif; ?>
    </div>
</main>
</body>
</html>
