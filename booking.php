<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location: signin.php');
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
    <h2>Book a Reservation</h2>
    <form method="post" action="process-booking.php">
        <label for="train_number">Train Number:</label>
        <input type="text" id="train_number" name="train_number" required><br><br>
        <label for="from_station">From Station:</label>
        <input type="text" id="from_station" name="from_station" required><br><br>
        <label for="to_station">To Station:</label>
        <input type="text" id="to_station" name="to_station" required><br><br>
        <label for="journey_date">Journey Date:</label>
        <input type="date" id="journey_date" name="journey_date" required><br><br>
        <label for="class">Class:</label>
        <select id="class" name="class" required>
            <option value="">Select Class</option>
            <option value="AC">AC</option>
            <option value="First">First Class</option>
            <option value="Second">Second Class</option>
        </select><br><br>
        <input type="submit" value="Book Now">
    </form>
</main>
<footer>
    <p>&copy; 2023 Railway Reservation System. All rights reserved.</p>
</footer>
</body>
</html>
