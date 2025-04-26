<?php
session_start();

// Check if user is already logged in
if(isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}

// Display error message if exists
$error = '';
if(isset($_GET['error'])) {
    $error = '<div class="error">Invalid username or password!</div>';
}
?>




<?php echo $error; ?>
