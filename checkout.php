<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CyberNest - Checkout</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="checkout.css">
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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="catalog.html">Catalog</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="signup.html">Sign-up</a></li>
                     <li><a href="login.html">Login</a></li>
                    <li><a href="admin.html">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Checkout Section -->
<section class="checkout-section">
    <h2>Checkout</h2>
    <form id="checkoutForm">
        <label for="name">Name:</label>
        <input type="text" id="name" required />

        <label for="address">Address:</label>
        <input type="text" id="address" required />

        <label>Payment Method:</label>
    <div class="payment-methods">
        <input type="radio" id="mpesa" name="payment" value="M-Pesa" required />
        <label for="mpesa">M-Pesa</label>
        <input type="radio" id="credit" name="payment" value="Credit Card" />
        <label for="credit">Credit Card</label>
    </div>

        <label>Delivery Method:</label>
    <div class="delivery-method">
        <input type="radio" id="doorDelivery" name="delivery" value="door" required />
        <label for="doorDelivery">Door to Door (Ksh 300)</label>
        <input type="radio" id="pickup" name="delivery" value="pickup" />
        <label for="pickup">Stop Pick Up Point (Ksh 150)</label>
    </div>

    <!-- Door to Door: Input location -->
    <div id="doorDeliveryOptions" class="delivery-options">
        <label for="location">Enter Your Location:</label>
        <input type="text" id="location" placeholder="e.g., Your address" />
        <button type="button" id="saveLocation">Save Location</button>
        <p id="locationSaved"></p>
    </div>

    <!-- Pick Up Point: Dropdown of malls -->
    <div id="pickupOptions" class="delivery-options" style="display:none;">
        <label for="pickupPoint">Select Pick Up Point:</label>
        <select id="pickupPoint">
            <option value="Sarit Centre">Sarit Centre</option>
            <option value="Two Rivers Mall">Two Rivers Mall</option>
            <option value="Westgate">Westgate</option>
            <option value="Yaya Centre">Yaya Centre</option>
        </select>
    </div>

    <button type="submit">Complete Purchase</button>
    </form>
</section>



<script async type='module' src='https://interfaces.zapier.com/assets/web-components/zapier-interfaces/zapier-interfaces.esm.js'></script>
<zapier-interfaces-chatbot-embed is-popup='true' chatbot-id='cm7syqylf000x14mincn3bkfv'></zapier-interfaces-chatbot-embed>
<script src="script.js"></script>
</body>
</html>
