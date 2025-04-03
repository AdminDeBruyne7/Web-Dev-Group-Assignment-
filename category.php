<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tech Haven - Category</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="category.css">
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
    <section class="go-back">
        <button onclick="window.history.back()">← Go Back</button>
    </section>

    <section class="category-title">
        <h2 id="categoryName">Category: Smartphones</h2>
    </section>

    <!-- Replace the existing video section with this code, place it right after the category-title section -->
    <section class="video-sections">
        <!-- Smartphones Videos -->
        <div id="smartphones-videos" class="video-section">
            <div class="video-container">
                <video src="phone1.mp4" autoplay loop muted></video>
            </div>
            <div class="video-container">
                <video src="phone2.mp4" autoplay loop muted></video>
            </div>
        </div>

        <!-- Laptops Videos -->
        <div id="laptops-videos" class="video-section" style="display: none;">
            <div class="video-container">
                <video src="laptop1.mp4" autoplay loop muted></video>
            </div>
            <div class="video-container">
                <video src="laptop2.mp4" autoplay loop muted></video>
            </div>
        </div>

        <!-- Audio Videos -->
        <div id="audio-videos" class="video-section" style="display: none;">
            <div class="video-container">
                <video src="audio1.mp4" autoplay loop muted></video>
            </div>
            <div class="video-container">
                <video src="audio2.mp4" autoplay loop muted></video>
            </div>
        </div>

        <!-- TVs Videos -->
        <div id="tvs-videos" class="video-section" style="display: none;">
            <div class="video-container">
                <video src="tv1.mp4" autoplay loop muted></video>
            </div>
            <div class="video-container">
                <video src="tv2.mp4" autoplay loop muted></video>
            </div>
        </div>

        <!-- Gaming Videos -->
        <div id="gaming-videos" class="video-section" style="display: none;">
            <div class="video-container">
                <video src="gaming1.mp4" autoplay loop muted></video>
            </div>
            <div class="video-container">
                <video src="gaming2.mp4" autoplay loop muted></video>
            </div>
        </div>
    </section>

    <!-- Products Grid (3 per row) -->
    <section class="products-grid">
        <!-- Smartphones -->
        <div id="smartphones" class="products-grid-section" style="display: none;">
            <div class="product-card">
                <img src="s25 cover.jpeg" alt="Samsung S25 Ultra" />
                <h3>Samsung S25 Ultra</h3>
                <div class="product-actions">
                    <a href="product.php?id=1" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="1">Add to Cart - KES 169,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="S24 cover.jpeg" alt="Samsung S24 Ultra" />
                <h3>Samsung S24 Ultra</h3>
                <div class="product-actions">
                    <a href="product.php?id=2" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="2">Add to Cart - KES 141,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="iphone 16 cover.jpeg" alt="Iphone 16" />
                <h3>Iphone 16</h3>
                <div class="product-actions">
                    <a href="product.php?id=3" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="3">Add to Cart - KES 135,900</button>
                </div>
            </div>
            <div class="product-card">
                <img src="pixel 9 cover.jpeg" alt="Google Pixel 9" />
                <h3>Google Pixel 9</h3>
                <div class="product-actions">
                    <a href="product.php?id=4" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="4">Add to Cart - KES 79,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="pixel cover.jpeg" alt="Google Pixel 8" />
                <h3>Google Pixel 8</h3>
                <div class="product-actions">
                    <a href="product.html?id=5" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="5">Add to Cart - KES 64,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="xiaomi cover.jpeg" alt="Xiaomi 13" />
                <h3>Xiaomi 13</h3>
                <div class="product-actions">
                    <a href="product.php?id=6" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="6">Add to Cart - KES 83,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="vivo cover.jpeg" alt="Vivo" />
                <h3>Vivo</h3>
                <div class="product-actions">
                    <a href="product.php?id=7" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="7">Add to Cart - KES 16,149</button>
                </div>
            </div>
        </div>

        <!-- Laptops -->
        <div id="laptops" class="products-grid-section" style="display: none;">
            <section class="video-section">
                <div class="video-container">
                    <video src="laptop1.mp4" autoplay loop muted></video>
                </div>
                <div class="video-container">
                    <video src="laptop2.mp4" autoplay loop muted></video>
                </div>
            </section>
            <div class="product-card">
                <img src="DELL.jpg" alt="Dell Inspiron 14 Plus" />
                <h3>Dell Inspiron 14 Plus</h3>
                <div class="product-actions">
                    <a href="product.php?id=8" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="8">Add to Cart - KES 89,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="ASUS ZENBOOK CV.jpg" alt="Asus Zenbook 14 OLED" />
                <h3>Asus Zenbook 14 OLED</h3>
                <div class="product-actions">
                    <a href="product.php?id=9" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="9">Add to Cart - KES 129,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="ACER CV.jpg" alt="Acer Aspire Go 15 (2024)" />
                <h3>Acer Aspire Go 15 (2024)</h3>
                <div class="product-actions">
                    <a href="product.php?id=10" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="10">Add to Cart - KES 64,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="THINKPAD CV.jpg" alt="Lenovo ThinkPad T14s Gen 6" />
                <h3>Lenovo ThinkPad T14s Gen 6</h3>
                <div class="product-actions">
                    <a href="product.php?id=11" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="11">Add to Cart - KES 149,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="RAZER CV.jpg" alt="Razer Blade 14" />
                <h3>Razer Blade 14</h3>
                <div class="product-actions">
                    <a href="product.php?id=12" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="12">Add to Cart - KES 249,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="MSI CV.jpg" alt="MSI Katana 15" />
                <h3>MSI Katana 15</h3>
                <div class="product-actions">
                    <a href="product.php?id=13" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="13">Add to Cart - KES 169,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="DellXPS CV.jpg" alt="Dell XPS 14" />
                <h3>Dell XPS 14</h3>
                <div class="product-actions">
                    <a href="product.php?id=14" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="14">Add to Cart - KES 189,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Legion cv.jpg" alt="Lenovo Legion 5i" />
                <h3>Lenovo Legion 5i</h3>
                <div class="product-actions">
                    <a href="product.php?id=15" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="15">Add to Cart - KES 139,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="ASUS Z CV.jpg" alt="Asus ROG Zephyrus G14" />
                <h3>Asus ROG Zephyrus G14</h3>
                <div class="product-actions">
                    <a href="product.php?id=16" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="16">Add to Cart - KES 199,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Gigabyte cv.jpg" alt="Gigabyte G6X" />
                <h3>Gigabyte G6X</h3>
                <div class="product-actions">
                    <a href="product.php?id=17" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="17">Add to Cart - KES 179,999</button>
                </div>
            </div>
        </div>

        <!-- Audio Equipment -->
        <div id="audio" class="products-grid-section" style="display: none;">
            <div class="product-card">
                <img src="Ruark Audio Sabre-R.jpeg" alt="Ruark Audio Sabre-R" />
                <h3>Ruark Audio Sabre-R</h3>
                <div class="product-actions">
                    <a href="product.php?id=18" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="18">Add to Cart - KES 49,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="PMC Prophecy Series.jpeg" alt="PMC Prophecy Series" />
                <h3>PMC Prophecy Series</h3>
                <div class="product-actions">
                    <a href="product.php?id=19" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="19">Add to Cart - KES 79,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="KEF R3 Meta (White Gloss).jpeg" alt="KEF LS50 Meta" />
                <h3>KEF LS50 Meta</h3>
                <div class="product-actions">
                    <a href="product.php?id=20" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="20">Add to Cart - KES 99,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Wharfedale Diamond 12.1.jpeg" alt="Wharfedale Diamond 12.1" />
                <h3>Wharfedale Diamond 12.1</h3>
                <div class="product-actions">
                    <a href="product.php?id=21" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="21">Add to Cart - KES 29,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Wharfedale Diamond 12.3.jpeg" alt="Wharfedale Diamond 12.3" />
                <h3>Wharfedale Diamond 12.3</h3>
                <div class="product-actions">
                    <a href="product.php?id=22" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="22">Add to Cart - KES 39,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="B&W 607 S3.jpeg" alt="B&W 607 S3" />
                <h3>B&W 607 S3</h3>
                <div class="product-actions">
                    <a href="product.php?id=23" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="23">Add to Cart - KES 59,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Q Acoustics M40 HD.jpeg" alt="Q Acoustics M40 HD" />
                <h3>Q Acoustics M40 HD</h3>
                <div class="product-actions">
                    <a href="product.php?id=24" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="24">Add to Cart - KES 69,999</button>
                </div>
            </div>
        </div>

        <!-- TVs and Home Entertainment -->
        <div id="tvs" class="products-grid-section" style="display: none;">
            <div class="product-card">
                <img src="Samsung S90DS90DD OLED.jpeg" alt="Samsung S90D/S90DD OLED" />
                <h3>Samsung S90D/S90DD OLED</h3>
                <div class="product-actions">
                    <a href="product.php?id=25" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="25">Add to Cart - KES 249,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="LG M5 OLED TV.jpeg" alt="LG M5 OLED TV" />
                <h3>LG M5 OLED TV</h3>
                <div class="product-actions">
                    <a href="product.php?id=26" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="26">Add to Cart - KES 199,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Panasonic Z95B OLED TV.jpeg" alt="Panasonic Z95B OLED TV" />
                <h3>Panasonic Z95B OLED TV</h3>
                <div class="product-actions">
                    <a href="product.php?id=27" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="27">Add to Cart - KES 229,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Hisense U8N Mini-LED TV.jpeg" alt="Hisense U8N Mini-LED TV" />
                <h3>Hisense U8N Mini-LED TV</h3>
                <div class="product-actions">
                    <a href="product.php?id=28" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="28">Add to Cart - KES 149,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Samsung S95D OLED.jpeg" alt="Samsung S95D OLED" />
                <h3>Samsung S95D OLED</h3>
                <div class="product-actions">
                    <a href="product.php?id=29" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="29">Add to Cart - KES 299,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="LG G4 OLED.jpeg" alt="LG G4 OLED" />
                <h3>LG G4 OLED</h3>
                <div class="product-actions">
                    <a href="product.php?id=30" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="30">Add to Cart - KES 219,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="TCL QM6K TV.jpeg" alt="TCL QM6K TV" />
                <h3>TCL QM6K TV</h3>
                <div class="product-actions">
                    <a href="product.php?id=31" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="31">Add to Cart - KES 79,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Sony A95K OLED.jpeg" alt="Sony A95K OLED" />
                <h3>Sony A95K OLED</h3>
                <div class="product-actions">
                    <a href="product.php?id=32" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="32">Add to Cart - KES 349,999</button>
                </div>
            </div>
        </div>

        <!-- Gaming Consoles and Accessories -->
        <div id="gaming" class="products-grid-section" style="display: none;">
            <div class="product-card">
                <img src="PlayStation 5 Slim.jpeg" alt="PlayStation 5 Slim" />
                <h3>PlayStation 5 Slim</h3>
                <div class="product-actions">
                    <a href="product.php?id=33" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="33">Add to Cart - KES 59,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Xbox Series S.jpeg" alt="Xbox Series S" />
                <h3>Xbox Series S</h3>
                <div class="product-actions">
                    <a href="product.php?id=34" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="34">Add to Cart - KES 39,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="PlayStation 5 Pro.jpeg" alt="PlayStation 5 Pro" />
                <h3>PlayStation 5 Pro</h3>
                <div class="product-actions">
                    <a href="product.php?id=35" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="35">Add to Cart - KES 79,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Xbox Series X.jpeg" alt="Xbox Series X" />
                <h3>Xbox Series X</h3>
                <div class="product-actions">
                    <a href="product.php?id=36" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="36">Add to Cart - KES 69,999</button>
                </div>
            </div>
            <div class="product-card">
                <img src="Nintendo Switch OLED Model.jpeg" alt="Nintendo Switch OLED Model" />
                <h3>Nintendo Switch OLED Model</h3>
                <div class="product-actions">
                    <a href="product.php?id=37" class="view-btn">View Details</a>
                    <button class="add-to-cart-btn" data-product-id="37">Add to Cart - KES 49,999</button>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Tech Haven <br>Contact: +254 723 456 789 </p>
        <p>Social: <a href="#">IG</a> | <a href="#">X</a></p>
        <p>Emails: info@techhaven.co.ke | complaints@techhaven.co.ke | inquiries@techhaven.co.ke</p>
    </footer>

    <script>
        // Read URL parameter "cat" and display category name
        const urlParams = new URLSearchParams(window.location.search);
        const catParam = urlParams.get('cat') || 'Unknown';
        document.getElementById('categoryName').textContent = 'Category: ' + catParam.charAt(0).toUpperCase() + catParam.slice(1);

        // Show the relevant sections based on the category
        const sections = {
            'smartphones': 'smartphones',
            'laptops': 'laptops',
            'audio': 'audio',
            'tvs': 'tvs',
            'gaming': 'gaming',
            'home': 'home',
            'wearables': 'wearables'
        };

        // Hide all product sections and video sections first
        document.querySelectorAll('.products-grid-section').forEach(section => {
            section.style.display = 'none';
        });
        document.querySelectorAll('.video-section').forEach(video => {
            video.style.display = 'none';
        });

        // Show the relevant product grid and video section
        const sectionId = sections[catParam.toLowerCase()] || 'smartphones';
        document.getElementById(sectionId).style.display = 'grid';
        document.getElementById(`${sectionId}-videos`).style.display = 'flex';

        // Example addToCart function
        function addToCart(product) {
            let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
            // Check if item already in cart
            const existing = cartItems.findIndex(i => i.name === product.name);
            if (existing !== -1) {
                // Increase quantity if already exists
                cartItems[existing].quantity++;
            } else {
                // Otherwise, push a new object
                cartItems.push({
                    name: product.name,
                    price: product.price,
                    image: product.image,
                    quantity: 1
                });
            }
            localStorage.setItem("cartItems", JSON.stringify(cartItems));
            alert("Item added to cart!");
        }
    </script>
    <script src="script.js"></script>
    
<script async type='module' src='https://interfaces.zapier.com/assets/web-components/zapier-interfaces/zapier-interfaces.esm.js'></script>
<zapier-interfaces-chatbot-embed is-popup='true' chatbot-id='cm7syqylf000x14mincn3bkfv'></zapier-interfaces-chatbot-embed>
</body>
</html>
