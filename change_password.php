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
$current_password = $_POST['currentPassword'] ?? '';
$new_password = $_POST['newPassword'] ?? '';
$confirm_password = $_POST['confirmPassword'] ?? '';

// Validate data
if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit();
}

if ($new_password !== $confirm_password) {
    echo json_encode(['success' => false, 'message' => 'New passwords do not match']);
    exit();
}

// Password strength validation
if (strlen($new_password) < 8) {
    echo json_encode(['success' => false, 'message' => 'Password must be at least 8 characters long']);
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

// Get current password hash from database
$sql = "SELECT password FROM webusers WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(['success' => false, 'message' => 'User not found']);
    $conn->close();
    exit();
}

$user = $result->fetch_assoc();
$stored_hash = $user['password'];

// Verify current password
if (!password_verify($current_password, $stored_hash)) {
    echo json_encode(['success' => false, 'message' => 'Current password is incorrect']);
    $conn->close();
    exit();
}

// Hash new password
$new_hash = password_hash($new_password, PASSWORD_DEFAULT);

// Update password in database
$sql = "UPDATE webusers SET password = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $new_hash, $user_id);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error updating password']);
}

$conn->close();
?>

