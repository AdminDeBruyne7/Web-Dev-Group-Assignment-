<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tech Haven - Cart</title>
  <link rel="stylesheet" href="style.css">
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

<!-- Cart Section -->
<section class="cart-section">
  <h2>Your Cart</h2>
  <!-- We'll fill this container dynamically from localStorage -->
  <div class="cart-items" id="cartItemsContainer"></div>

  <!-- Checkout button remains -->
  <a href="checkout.php" class="checkout-btn">Proceed to Checkout</a>
</section>



<script src="script.js"></script>

<!-- Inline script to load cart items from localStorage -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const cartItemsContainer = document.getElementById("cartItemsContainer");

    // 1. Load cart items from localStorage
    let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

    // 2. If no items, show empty message
    if (cartItems.length === 0) {
      cartItemsContainer.innerHTML = "<p>Your cart is empty.</p>";
      return;
    }

    // 3. Otherwise, display each item
    cartItems.forEach((item, index) => {
      // item is expected to have { name, price, image, quantity }
      const cartItem = document.createElement("div");
      cartItem.classList.add("cart-item");
      cartItem.innerHTML = `
        <img src="${item.image}" alt="${item.name}" />
        <div class="item-details">
          <p>${item.name}</p>
          <p>Ksh ${item.price}</p>
        </div>
        <div class="item-actions">
          <button class="decrement" data-index="${index}">-</button>
          <span class="quantity">${item.quantity}</span>
          <button class="increment" data-index="${index}">+</button>
        </div>
      `;
      cartItemsContainer.appendChild(cartItem);
    });

    // 4. Add event listeners for increment/decrement if desired
    cartItemsContainer.addEventListener("click", function(e) {
      if (e.target.classList.contains("increment")) {
        const idx = e.target.getAttribute("data-index");
        cartItems[idx].quantity++;
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
        window.location.reload(); // Quick reload to update the UI
      } else if (e.target.classList.contains("decrement")) {
        const idx = e.target.getAttribute("data-index");
        if (cartItems[idx].quantity > 1) {
          cartItems[idx].quantity--;
        } else {
          // Optionally remove item if quantity hits 0
          cartItems.splice(idx, 1);
        }
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
        window.location.reload();
      }
    });
  });
</script>

<script async type='module' src='https://interfaces.zapier.com/assets/web-components/zapier-interfaces/zapier-interfaces.esm.js'></script>
<zapier-interfaces-chatbot-embed is-popup='true' chatbot-id='cm7syqylf000x14mincn3bkfv'></zapier-interfaces-chatbot-embed>
</body>
</html>
