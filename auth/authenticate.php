<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect('../index.php');
}

// Get and sanitize inputs
$username = sanitizeInput($_POST['name']);
$password = $_POST['password']; // Don't sanitize password (for hashing)

// Database connection
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Prepare statement
$stmt = $db->prepare("SELECT id, username, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    
    // Verify password (assuming passwords are hashed with password_hash())
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        redirect('../setting.php');
    }
}

// If we get here, login failed
redirect('../index.php?error=1');