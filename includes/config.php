<?php
// Error reporting (disable in production)
error_reporting(0);
ini_set('display_errors', 0);

// Database configuration
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'app_user');  // Custom limited-privilege user
define('DB_PASS', 'strong_password_here');
define('DB_NAME', 'student_exam');

// Session configuration
if (session_status() === PHP_SESSION_NONE) {
    session_start([
        'cookie_secure' => true,    // Requires HTTPS
        'cookie_httponly' => true,  // Prevent JavaScript access
        'use_strict_mode' => true   // Prevent session fixation
    ]);
}