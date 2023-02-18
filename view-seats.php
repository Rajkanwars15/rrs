<!DOCTYPE html>
<html>
<head>
    <title>Railway Reservation System - View Seats</title>
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
    <h2>View Available/Booked Seats</h2>
    <?php
    // Establish a database connection
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '123456789';
    $dbname = 'railway_management_system';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Check for errors in the database connection
    if (!$conn) {
        die('Could not connect to database: ' . mysqli_error());
    }

    // Fetch the available and booked seats from the database
    $availableSeatsQuery = "SELECT * FROM seats WHERE status = 'available'";
    $availableSeatsResult = mysqli_query($conn, $availableSeatsQuery);

    $bookedSeatsQuery = "SELECT * FROM seats WHERE status = 'booked'";
    $bookedSeatsResult = mysqli_query($conn, $bookedSeatsQuery);

    // Display the available and booked seats in a table
    echo "<h3>Available Seats:</h3>";
    echo "<table>";
    echo "<tr><th>Seat Number</th><th>Status</th></tr>";
    while ($row = mysqli_fetch_assoc($availableSeatsResult)) {
        echo "<tr><td>" . $row['seat_number'] . "</td><td>" . $row['status'] . "</td></tr>";
    }
    echo "</table>";

    echo "<h3>Booked Seats:</h3>";
    echo "<table>";
    echo "<tr><th>Seat Number</th><th>Status</th><th>Customer Name</th><th>CNIC Number</th></tr>";
    while ($row = mysqli_fetch_assoc($bookedSeatsResult)) {
        echo "<tr><td>" . $row['seat_number'] . "</td><td>" . $row['status'] . "</td><td>" . $row['customer_name'] . "</td><td>" . $row['cnic_number'] . "</td></tr>";
    }
    echo "</table>";

    // Close the database connection
    mysqli_close($conn);
    ?>
</main>
<footer>
    <p>&copy; 2023 Railway Reservation System. All rights reserved.</p>
</footer>
</body>
</html>
