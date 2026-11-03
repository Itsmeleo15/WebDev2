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
    <link rel="stylesheet" href="css/style.css?v=15.0">
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
            <h2>Create Account</h2>
            <a href="index.php" class="auth-close-btn" aria-label="Close modal">✕</a>
        </div>

        <form action="register.php" method="POST" class="auth-form">
            <div>
                <label class="form-label">Email</label>
                <input type="email" name="email" required class="form-input auth-input" placeholder="name@example.com">
            </div>

            <div>
                <label class="form-label">Username</label>
                <input type="text" name="username" required class="form-input auth-input" placeholder="Choose a username">
            </div>

            <div>
                <label class="form-label">Password</label>
                <input type="password" name="password" required class="form-input auth-input" placeholder="••••••••">
            </div>

            <div>
                <label class="form-label">Date of Birth</label>
                <div class="auth-dob-grid">
                    <select name="dob_month" required class="form-input auth-input auth-select">
                        <option value="" disabled selected>Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select name="dob_day" required class="form-input auth-input auth-select">
                        <option value="" disabled selected>Day</option>
                        <?php for ($d = 1; $d <= 31; $d++): ?>
                            <option value="<?= sprintf('%02d', $d) ?>"><?= $d ?></option>
                        <?php endfor; ?>
                    </select>
                    <select name="dob_year" required class="form-input auth-input auth-select">
                        <option value="" disabled selected>Year</option>
                        <?php 
                        $currentYear = (int)date('Y');
                        for ($y = $currentYear; $y >= 1920; $y--): 
                        ?>
                            <option value="<?= $y ?>"><?= $y ?></option>
                        <?php endfor; ?>
                    </select>
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
