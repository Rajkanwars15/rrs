<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not, redirect to the login page
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Railway Reservation System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include('header.php'); ?>
<main>
    <h2>Welcome to the Railway Reservation System</h2>
    <p>You can now:</p>
    <ul>
        <li><a href="Booking.php">Book a Reservation</a></li>
        <li><a href="Cancel.php">Cancel a Reservation</a></li>
    </ul>
</main>
<?php include('footer.php'); ?>
</body>
</html>