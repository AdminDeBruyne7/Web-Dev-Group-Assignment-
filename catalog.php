<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tech Haven - Catalog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="catalog.css">
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
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Catalog Category Cards -->
<section class="catalog-categories">
    <h2>Catalog Categories</h2>
    <div class="category-cards grid-3">
        <div class="category-card">
            <span class="emoji">📱</span>
            <h3>Smartphones and Accessories</h3>
            <a href="category.php?cat=smartphones" class="shop-btn">Shop</a>
        </div>
        <div class="category-card">
            <span class="emoji">💻</span>
            <h3>Laptops and Computers</h3>
            <a href="category.php?cat=laptops" class="shop-btn">Shop</a>
        </div>
        <div class="category-card">
            <span class="emoji">🎧</span>
            <h3>Audio Equipment</h3>
            <a href="category.php?cat=audio" class="shop-btn">Shop</a>
        </div>
        <div class="category-card">
            <span class="emoji">📺</span>
            <h3>TVs and Home Entertainment</h3>
            <a href="category.php?cat=tvs" class="shop-btn">Shop</a>
        </div>
        <div class="category-card">
            <span class="emoji">🎮</span>
            <h3>Gaming Consoles and Accessories</h3>
            <a href="category.php?cat=gaming" class="shop-btn">Shop</a>
        </div>
        
    </div>
</section>

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
