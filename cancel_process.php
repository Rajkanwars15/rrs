<?php
// Connect to the database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123456789';
$dbname = 'railway_management_system';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}

// Get the reservation ID from the URL parameter
$reservation_id = $_GET['id'];

// Retrieve the reservation from the database
$sql = "SELECT * FROM reservations WHERE id = $reservation_id";
$result = mysqli_query($conn, $sql);
$reservation = mysqli_fetch_assoc($result);

if (!$reservation) {
    die('Invalid reservation ID');
}

// Delete the reservation from the database
$sql = "DELETE FROM reservations WHERE id = $reservation_id";
if (mysqli_query($conn, $sql)) {
    echo 'Reservation has been cancelled';
} else {
    echo 'Error cancelling reservation: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>
