<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

if (isLoggedIn()) {
    redirect('auth.php');
}

$error = isset($_GET['error']) ? 'Invalid username or password!' : '';

