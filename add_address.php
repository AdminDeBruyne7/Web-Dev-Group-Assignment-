<?php
// Start session
session_start();

// Check if user is logged in
if(!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Not logged in']);
    exit();
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}

// Get user ID from session
$user_id = $_SESSION['user_id'];

// Get form data
$address_name = $_POST['addressName'] ?? '';
$full_address = $_POST['fullAddress'] ?? '';
$city = $_POST['city'] ?? '';
$postal_code = $_POST['postalCode'] ?? '';
$phone_number = $_POST['phoneNumber'] ?? '';

// Validate data
if (empty($address_name) || empty($full_address) || empty($city) || empty($postal_code) || empty($phone_number)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit();
}

// Database connection
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "web_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed']);
    exit();
}

// Insert address into database
$sql = "INSERT INTO addresses (user_id, address_name, full_address, city, postal_code, phone_number) 
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("isssss", $user_id, $address_name, $full_address, $city, $postal_code, $phone_number);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error adding address']);
}

$conn->close();
?>

