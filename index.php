<?php
// Start session
session_start();

// Include database connection
include 'db_connect.php';

// Check if user is already logged in
if(isset($_SESSION['user_id'])) {
    // Redirect to user page
    header("Location: user_page.php");
    exit();
}

// Process login form
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, name, email, password, role FROM webusers WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        
        // Verify password
        if(password_verify($password, $user['password'])) {
            // Password is correct, create session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'];
            
            // Redirect to user page
            header("Location: user_page.php");
            exit();
        } else {
            $login_error = "Invalid email or password";
        }
    } else {
        $login_error = "Invalid email or password";
    }
    
    $stmt->close();
}

// Process registration form
if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM webusers WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows > 0) {
        $register_error = "Email already exists";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO webusers (name, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $hashed_password, $role);
        
        if($stmt->execute()) {
            $register_success = "Registration successful! You can now login.";
        } else {
            $register_error = "Registration failed: " . $conn->error;
        }
    }
    
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full-Stack Login & Register Form With User & Admin Page | Codehal</title>
    <link rel="stylesheet" href="styless.css">
</head>

<body>

    <div class="container">
        <div class="form-box <?php echo isset($_POST['register']) ? '' : 'active'; ?>" id="login-form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <h2>Login</h2>
                <?php if(isset($login_error)): ?>
                    <div class="error-message"><?php echo $login_error; ?></div>
                <?php endif; ?>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <p>Dont Have an Account ? <a href="#" onclick="showForm('register-form')">Register</a></p>
            </form>
        </div>

        <div class="form-box <?php echo isset($_POST['register']) ? 'active' : ''; ?>" id="register-form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <h2>Register</h2>
                <?php if(isset($register_error)): ?>
                    <div class="error-message"><?php echo $register_error; ?></div>
                <?php endif; ?>
                <?php if(isset($register_success)): ?>
                    <div class="success-message"><?php echo $register_success; ?></div>
                <?php endif; ?>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <select name="role" required>
                    <option value="">---Select Role---</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <button type="submit" name="register">Register</button>
                <p>Already Have an Account ? <a href="#" onclick="showForm('login-form')">Log in</a></p>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>

