<!DOCTYPE html>
<html>
<head>
    <title>Railway Reservation System - Cancel Reservation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <h1>Railway Reservation System</h1>
</header>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="signin.php">Sign In</a></li>
        <li><a href="booking.php">Book a Reservation</a></li>
        <li><a href="view-seats.php">View Available/Booked Seats</a></li>
        <li><a href="cancel.php">Cancel Reservation</a></li>
        <li><a href="refund.php">Apply for Refund</a></li>
    </ul>
</nav>
<main>
    <h2>Cancel Reservation</h2>
    <p>Please enter the details of the reservation you wish to cancel:</p>
    <form action="cancel_process.php" method="post">
        <label for="reservation_id">Reservation ID:</label>
        <input type="text" id="reservation_id" name="reservation_id">
        <br>
        <input type="submit" value="Cancel Reservation">
    </form>
</main>
<footer>
    <p>&copy; 2023 Railway Reservation System. All rights reserved.</p>
</footer>
</body>
</html>
