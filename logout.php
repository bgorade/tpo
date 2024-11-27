<?php
// Start session
session_start();

// Check if user is logged in
if(isset($_SESSION['user_id'])) {
    // Unset all of the session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();
    
    // Redirect to login page
    header("Location: login.php");
    exit;
} else {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit;
}
?>
