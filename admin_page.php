<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CyberNest - Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css" />
</head>
<body>
  <script>
    // Simple simulation: redirect to login if not admin.
    if (localStorage.getItem("admin") !== "true") {
      window.location.href = "login.html";
    }
  </script>

  <!-- Header without Admin nav link -->
  <header>
    <nav>
      <a href="index.html" class="logo">CyberNest</a>
      <div class="header-actions">
        <button id="modeToggle" class="mode-toggle">
          <span id="modeIcon">☀️</span>
        </button>
      </div>
    </nav>
  </header>

  <main>
    <h1>Admin Dashboard</h1>

    <section class="dashboard-section">
      <h2>Dashboard</h2>
      <ul>
        <li>Overview of sales, orders, and customer activity.</li>
        <li>Real-time data visualization and analytics.</li>
      </ul>
    </section>

    <section class="product-management">
      <h2>Product Management</h2>
      <ul>
        <li>Add, edit, and delete product listings.</li>
        <li>Manage product categories and tags.</li>
        <li>Inventory management to track stock levels.</li>
      </ul>
    </section>

    <section class="order-management">
      <h2>Order Management</h2>
      <ul>
        <li>View and process orders.</li>
        <li>Update order status (e.g., pending, shipped, delivered).</li>
        <li>Handle returns and refunds.</li>
      </ul>
    </section>

    <section class="customer-management">
      <h2>Customer Management</h2>
      <ul>
        <li>View and manage customer profiles.</li>
        <li>Track customer interactions and support queries.</li>
        <li>Manage customer reviews and ratings.</li>
      </ul>
    </section>

    <section class="analytics-reporting">
      <h2>Analytics and Reporting</h2>
      <ul>
        <li>Sales reports and performance metrics.</li>
        <li>Customer behavior analysis.</li>
        <li>Inventory and stock reports.</li>
      </ul>
    </section>

    <section class="user-management">
      <h2>User Management</h2>
      <ul>
        <li>Manage admin roles and permissions.</li>
        <li>Add or remove admin users.</li>
        <li>Role-based access control.</li>
      </ul>
    </section>

    <section class="marketing-promotions">
      <h2>Marketing and Promotions</h2>
      <ul>
        <li>Create and manage discount codes and promotions.</li>
        <li>Track the performance of marketing campaigns.</li>
        <li>Manage email marketing lists and campaigns.</li>
      </ul>
    </section>

    <section class="settings-configuration">
      <h2>Settings and Configuration</h2>
      <ul>
        <li>General site settings (e.g., site name, logo, contact information).</li>
        <li>Payment gateway integration and settings.</li>
        <li>Shipping and tax configuration.</li>
      </ul>
    </section>

    <section class="security-compliance">
      <h2>Security and Compliance</h2>
      <ul>
        <li>Monitor security logs and activities.</li>
        <li>Ensure compliance with data protection regulations.</li>
        <li>Implement role-based access control and data encryption.</li>
      </ul>
    </section>
  </main>

  <footer>
    <p>Tech Haven <br>Contact: +254 723 456 789 </p>
    <p>Social: <a href="#">IG</a> | <a href="#">X</a></p>
    <p>Emails: info@techhaven.co.ke | complaints@techhaven.co.ke | inquiries@techhaven.co.ke</p>
</footer>
  <script src="admin.js"></script>
  
<script async type='module' src='https://interfaces.zapier.com/assets/web-components/zapier-interfaces/zapier-interfaces.esm.js'></script>
<zapier-interfaces-chatbot-embed is-popup='true' chatbot-id='cm7syqylf000x14mincn3bkfv'></zapier-interfaces-chatbot-embed>
</body>
</html>
