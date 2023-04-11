<?php
// Start the session
session_start();

// Unset the user_id session variable
unset($_SESSION['user_id']);

// Redirect to the login page
header('Location: login.php');
exit;
?>