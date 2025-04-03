<?php
// Start session
session_start();

// Check if user is logged in
if(!isset($_SESSION['user_id'])) {
    // Redirect to login page
    header("Location: index.php");
    exit();
}

// Get user information from session
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email'];
$user_role = $_SESSION['user_role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Haven - Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
    <nav class="glass-nav">
        <div class="nav-container">
            <!-- Left Section -->
            <div class="nav-left">
                <div class="logo">Tech Haven</div>
            </div>

            <!-- Middle Section -->
            <div class="nav-middle">
                <input type="text" id="search-bar" placeholder="Search products...">
                <div class="header-actions">
                    <button id="modeToggle" class="mode-toggle">
                        <span id="modeIcon">☀️</span>
                    </button>
                </div>
            </div>

            <!-- Right Section -->
            <div class="nav-right">
                <ul class="nav-links">
                    <li><a href="user_page.php">Home</a></li>
                    <li><a href="catalog.php">Catalog</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <main id="content">
        <h1>Welcome, <?php echo htmlspecialchars($user_name); ?>!</h1>
        <video src="S25.mp4" loop autoplay muted ></video>
        <section id="promotions">
            <h2>Local Promotions</h2>
            <div class="promotion-card">Free Door-to-Door Delivery on Orders Above KES 10,000!</div>
        </section>
        <section id="new-stock">
            <h2 class="section-title">Coming Soon</h2>
            <div class="new-stock-grid">
                <div class="stock-card">
                    <img src="s25.jpeg" alt="S25 Ultra">
                    <h3>Samsung S25 Ultra</h3>
                    <p>Coming Soon</p>
                </div>
                <div class="stock-card">
                    <img src="iphone 16.jpeg" alt="iPhone 16 Pro">
                    <h3>iPhone 16 Pro</h3>
                    <p>Coming Soon</p>
                </div>
                <div class="stock-card">
                    <img src="s25 edge.webp" alt="S25 Edge">
                    <h3>Samsung S25 Edge</h3>
                    <p>Coming Soon</p>
                </div>
            </div>
        </section>
        <section id="categories">
            <h2>Shop by Category</h2>
            <div class="category-grid">
                <div class="category-card"><img src="Smartphones.jpeg" alt="Smartphones"><a href="catalog.html?category=smartphones">Smartphones</a></div>
                <div class="category-card"><img src="LAPTOP.jpeg" alt="Laptops"><a href="catalog.html?category=laptops">Laptops</a></div>
                <div class="category-card"><img src="s TV.jpeg" alt="TVs"><a href="catalog.html?category=tvs">TVs</a></div>
                <div class="category-card"><img src="JBL.jpeg" alt="Audio Speakers"><a href="catalog.html?category=audioSpeakers">Audio Speakers</a></div>
                <div class="category-card"><img src="gaming.jpeg" alt="Gaming Products"><a href="catalog.html?category=gamingProducts">Gaming Products</a></div>
            </div>
        </section>
    </main>
    <footer>
        <p>Tech Haven <br>Contact: +254 723 456 789 </p>
        <p>Social: <a href="#">IG</a> | <a href="#">X</a></p>
        <p>Emails: info@techhaven.co.ke | complaints@techhaven.co.ke | inquiries@techhaven.co.ke</p>
    </footer>
    <script src="script.js"></script>
<script async type='module' src='https://interfaces.zapier.com/assets/web-components/zapier-interfaces/zapier-interfaces.esm.js'></script>
<zapier-interfaces-chatbot-embed is-popup='true' chatbot-id='cm7syqylf000x14mincn3bkfv'></zapier-interfaces-chatbot-embed>
</body>
</html>

