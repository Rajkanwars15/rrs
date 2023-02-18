<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: signin.php');
    exit();
}

// Connect to the database
$host = 'localhost';
$username = 'root';
$password = '123456789';
$database = 'railway_management_system';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Handle the form submission
if (isset($_POST['submit'])) {
    $booking_id = $_POST['booking_id'];
    $username = $_SESSION['username'];

    // Check if the booking exists and belongs to the user
    $query = "SELECT * FROM bookings WHERE booking_id = '$booking_id' AND username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Update the booking status to "cancelled"
        $query = "UPDATE bookings SET status = 'cancelled' WHERE booking_id = '$booking_id'";
        if (mysqli_query($conn, $query)) {
            echo '<p>Your booking has been cancelled and a refund will be processed shortly.</p>';
        } else {
            echo '<p>Sorry, there was an error cancelling your booking. Please try again later.</p>';
        }
    } else {
        echo '<p>Sorry, the booking ID you entered is invalid or does not belong to you. Please try again.</p>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Railway Reservation System - Apply for Refund</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <h1>Railway Reservation System</h1>
</header>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="booking.php">Book a Reservation</a></li>
        <li><a href="view-seats.php">View Available/Booked Seats</a></li>
        <li><a href="cancel.php">Cancel Reservation</a></li>
        <li><a href="refund.php">Apply for Refund</a></li>
        <li><a href="signout.php">Sign Out</a></li>
    </ul>
</nav>
<main>
    <h2>Apply for Refund</h2>
    <p>Use the form below to apply for a refund for a booking.</p>
    <form method="post" action="">
        <label for="booking_id">Booking ID:</label>
        <input type="text" id="booking_id" name="booking_id" required>
        <button type="submit" name="submit">Apply for Refund</button>
    </form>
</main>
<footer>
    <p>&copy; 2023 Railway Reservation System. All rights reserved.</p>
</footer>
</body>
</html>
