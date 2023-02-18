<?php
// Establish a database connection
$host = 'localhost';
$username = 'root';
$password = '123456789';
$database = 'railway_management_system';
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection is successful
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Retrieve the form data from the booking page
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$train = $_POST['train'];
$seats = $_POST['seats'];

// Insert the data into the database
$query = "INSERT INTO bookings (name, email, phone, train, seats) VALUES ('$name', '$email', '$phone', '$train', '$seats')";
$result = mysqli_query($connection, $query);

// Check if the data is inserted successfully
if ($result) {
    echo "Booking successful!";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>