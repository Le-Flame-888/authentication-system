<?php
session_start();

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'system_ath');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Fetch user from database
$stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $username, $hashed_password);

if ($stmt->fetch() && password_verify($password, $hashed_password)) {
    // Set session variables
    $_SESSION['user_id'] = $id;
    $_SESSION['username'] = $username;
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}

$stmt->close();
$conn->close();
?>