<?php
// Start session
session_start();

// Check if user is logged in
if(!isset($_SESSION['user_id'])) {
    // Redirect to login page
    header("Location: login.php");
    exit();
}

// Check if order ID is provided
if(!isset($_GET['id'])) {
    // Redirect to profile page
    header("Location: profile.php");
    exit();
}

$order_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

// Database connection
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "web_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get order details
$sql = "SELECT o.*, p.name as product_name, p.price, p.image 
        FROM orders o 
        JOIN products p ON o.product_id = p.id 
        WHERE o.id = ? AND o.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $order_id, $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    // Order not found or doesn't belong to user
    header("Location: profile.php");
    exit();
}

$order = $result->fetch_assoc();

// Get shipping address
$sql = "SELECT * FROM addresses WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $order['address_id']);
$stmt->execute();
$address_result = $stmt->get_result();
$shipping_address = $address_result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tech Haven - Order Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="order_details.css">
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

    <main class="order-details-container">
        <div class="back-link">
            <a href="profile.php?tab=purchase-history">← Back to Purchase History</a>
        </div>
        
        <h1>Order Details</h1>
        
        <div class="order-summary">
            <div class="order-info">
                <div class="info-item">
                    <span class="label">Order Number:</span>
                    <span class="value">#<?php echo $order['id']; ?></span>
                </div>
                <div class="info-item">
                    <span class="label">Order Date:</span>
                    <span class="value"><?php echo date('F j, Y', strtotime($order['order_date'])); ?></span>
                </div>
                <div class="info-item">
                    <span class="label">Status:</span>
                    <span class="value status-badge <?php echo strtolower($order['status']); ?>"><?php echo $order['status']; ?></span>
                </div>
                <div class="info-item">
                    <span class="label">Payment Method:</span>
                    <span class="value"><?php echo $order['payment_method']; ?></span>
                </div>
            </div>
        </div>
        
        <div class="order-sections">
            <div class="order-section">
                <h2>Items</h2>
                <div class="order-items">
                    <div class="order-item">
                        <div class="item-image">
                            <img src="<?php echo $order['image']; ?>" alt="<?php echo htmlspecialchars($order['product_name']); ?>">
                        </div>
                        <div class="item-details">
                            <h3><?php echo htmlspecialchars($order['product_name']); ?></h3>
                            <p class="item-price">KES <?php echo number_format($order['price']); ?></p>
                            <p class="item-quantity">Quantity: <?php echo $order['quantity']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="order-section">
                <h2>Shipping Address</h2>
                <?php if ($shipping_address): ?>
                <div class="address-details">
                    <p><strong><?php echo htmlspecialchars($shipping_address['address_name']); ?></strong></p>
                    <p><?php echo htmlspecialchars($shipping_address['full_address']); ?></p>
                    <p><?php echo htmlspecialchars($shipping_address['city']); ?>, <?php echo htmlspecialchars($shipping_address['postal_code']); ?></p>
                    <p>Phone: <?php echo htmlspecialchars($shipping_address['phone_number']); ?></p>
                </div>
                <?php else: ?>
                <p>Shipping address not available.</p>
                <?php endif; ?>
            </div>
            
            <div class="order-section">
                <h2>Order Summary</h2>
                <div class="order-totals">
                    <div class="total-row">
                        <span>Subtotal:</span>
                        <span>KES <?php echo number_format($order['price'] * $order['quantity']); ?></span>
                    </div>
                    <div class="total-row">
                        <span>Shipping:</span>
                        <span>KES <?php echo number_format($order['shipping_fee']); ?></span>
                    </div>
                    <?php if ($order['discount'] > 0): ?>
                    <div class="total-row">
                        <span>Discount:</span>
                        <span>-KES <?php echo number_format($order['discount']); ?></span>
                    </div>
                    <?php endif; ?>
                    <div class="total-row grand-total">
                        <span>Total:</span>
                        <span>KES <?php echo number_format(($order['price'] * $order['quantity']) + $order['shipping_fee'] - $order['discount']); ?></span>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if ($order['status'] === 'Delivered'): ?>
        <div class="order-actions">
            <a href="product.php?id=<?php echo $order['product_id']; ?>&action=review" class="review-product-btn">Write a Review</a>
            <button class="reorder-btn" data-product-id="<?php echo $order['product_id']; ?>">Buy Again</button>
        </div>
        <?php endif; ?>
        
        <?php if ($order['status'] === 'Processing'): ?>
        <div class="order-actions">
            <button class="cancel-order-btn" data-order-id="<?php echo $order['id']; ?>">Cancel Order</button>
        </div>
        <?php endif; ?>
    </main>

    <footer>
        <p>Tech Haven <br>Contact: +254 723 456 789 </p>
        <p>Social: <a href="#">IG</a> | <a href="#">X</a></p>
        <p>Emails: info@techhaven.co.ke | complaints@techhaven.co.ke | inquiries@techhaven.co.ke</p>
    </footer>

    <script src="script.js"></script>
    <script>
        // Buy Again functionality
        document.querySelector('.reorder-btn')?.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            
            // Add to cart
            fetch('add_to_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: 1
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = 'cart.php';
                } else {
                    alert('Error adding product to cart: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while adding the product to cart.');
            });
        });
        
        // Cancel Order functionality
        document.querySelector('.cancel-order-btn')?.addEventListener('click', function() {
            if (confirm('Are you sure you want to cancel this order?')) {
                const orderId = this.getAttribute('data-order-id');
                
                fetch('cancel_order.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        order_id: orderId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Order cancelled successfully!');
                        window.location.reload();
                    } else {
                        alert('Error cancelling order: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while cancelling the order.');
                });
            }
        });
    </script>
</body>
</html>

